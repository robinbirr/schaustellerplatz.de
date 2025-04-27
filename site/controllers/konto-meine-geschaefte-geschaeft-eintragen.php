<?php
return function ($kirby, $page) {
    // Nur angemeldete Benutzer dürfen diese Seite aufrufen
    if (!$kirby->user()) {
        go('/anmelden');
    }

    $geschaeft = null;
    $id = get('id');

    // Wenn eine ID angegeben ist, versuchen wir das Geschäft zu laden
    if ($id) {
        $geschaeft = $kirby->site()->find('geschaefte')->children()->filter(function ($p) use ($id) {
            return $p->uuid()->toString() === $id;
        })->first();

        // Prüfe, ob der Benutzer das Geschäft bearbeiten darf
        if ($geschaeft && !$geschaeft->isEditable()) {
            go('/konto/meine-geschaefte');
        }
    }

    $alert = null;
    $success = false;

    // Initialisiere Formularwerte
    $data = $geschaeft ? [
        'title' => $geschaeft->title()->value(),
        'typ' => $geschaeft->typ()->value(),
        'beschreibung' => $geschaeft->beschreibung()->value(),
        'front_meters' => $geschaeft->front_meters()->value(),
        'tiefe_meters' => $geschaeft->tiefe_meters()->value(),
        'hoehe_meters' => $geschaeft->hoehe_meters()->value(),
        'stromanschluss' => $geschaeft->stromanschluss()->value(),
        'wasseranschluss' => $geschaeft->wasseranschluss()->toBool()
    ] : [];

    // Wenn das Formular abgeschickt wurde
    if ($kirby->request()->is('POST') && get('save')) {
        // CSRF-Token überprüfen
        if (!csrf(get('csrf'))) {
            $alert = [
                'type' => 'error',
                'message' => 'Ungültiger CSRF-Token. Bitte versuche es erneut.'
            ];
        } else {
            // Formulardaten einlesen
            $data = [
                'title' => get('title'),
                'typ' => get('typ'),
                'beschreibung' => get('beschreibung'),
                'front_meters' => (float)get('front_meters'),
                'tiefe_meters' => (float)get('tiefe_meters'),
                'hoehe_meters' => (float)get('hoehe_meters'),
                'stromanschluss' => get('stromanschluss'),
                'wasseranschluss' => (bool)get('wasseranschluss')
            ];

            // Validierung
            $rules = [
                'title' => ['required', 'min' => 3, 'max' => 255],
                'typ' => ['required'],
                'front_meters' => ['required', 'num'],
                'tiefe_meters' => ['required', 'num'],
                'hoehe_meters' => ['required', 'num']
            ];

            $messages = [
                'title' => 'Bitte gib einen Namen für dein Geschäft ein (3-255 Zeichen).',
                'typ' => 'Bitte wähle den Typ deines Geschäfts aus.',
                'front_meters' => 'Bitte gib die Front in Metern ein.',
                'tiefe_meters' => 'Bitte gib die Tiefe in Metern ein.',
                'hoehe_meters' => 'Bitte gib die Höhe in Metern ein.'
            ];

            // Validiere die Daten
            if ($invalid = invalid($data, $rules, $messages)) {
                $alert = [
                    'type' => 'error',
                    'message' => 'Das Formular enthält Fehler:',
                    'details' => $invalid
                ];
            } else {
                try {
                    // Als Kirby anmelden, um mit Berechtigungen zu arbeiten
                    $kirby->impersonate('kirby');

                    if ($geschaeft) {
                        // Bestehendes Geschäft aktualisieren
                        $geschaeft->update($data);
                        $success = 'Geschäft erfolgreich aktualisiert!';
                    } else {
                        // Neues Geschäft erstellen
                        $newGeschaeft = $kirby->site()->find('geschaefte')->createChild([
                            'slug' => Str::slug($data['title']) . '-' . time(),
                            'template' => 'geschaeft',
                            'content' => $data
                        ]);

                        if ($newGeschaeft) {
                            $success = 'Geschäft erfolgreich erstellt!';
                            // Redirect zur Übersichtsseite
                            go('/konto/meine-geschaefte');
                        } else {
                            $alert = [
                                'type' => 'error',
                                'message' => 'Das Geschäft konnte nicht gespeichert werden.'
                            ];
                        }
                    }
                } catch (Exception $e) {
                    $alert = [
                        'type' => 'error',
                        'message' => 'Fehler beim Speichern: ' . $e->getMessage()
                    ];
                }
            }
        }
    }

    // Geschäftstypen für das Auswahlfeld
    $typen = [
        'Automatenwagen' => 'Automatenwagen',
        'Fahrgeschäft' => 'Fahrgeschäft',
        'Spielgeschäft' => 'Spielgeschäft',
        'Imbiss' => 'Imbiss',
        'Schießwagen' => 'Schießwagen',
        'Süßwarenstand' => 'Süßwarenstand',
        'Getränkestand' => 'Getränkestand',
        'Laufgeschäft' => 'Laufgeschäft',
        'Warenverkaufsstand' => 'Warenverkaufsstand',
        'Anderes' => 'Anderes'
    ];

    // Stromanschlüsse für das Auswahlfeld
    $stromanschluesse = [
        '230V' => '230V (Haushaltssteckdose)',
        '400V-16A' => '400V / 16A (CEE)',
        '400V-32A' => '400V / 32A (CEE)',
        '400V-63A' => '400V / 63A (CEE)',
        '400V-125A' => '400V / 125A (CEE)',
        'Keiner' => 'Kein Stromanschluss benötigt'
    ];

    return [
        'geschaeft' => $geschaeft,
        'data' => $data,
        'alert' => $alert,
        'success' => $success,
        'typen' => $typen,
        'stromanschluesse' => $stromanschluesse
    ];
};