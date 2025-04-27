<?php
return function ($kirby, $page) {
    // Nur angemeldete Benutzer dürfen diese Seite aufrufen
    if (!$kirby->user()) {
        go('/anmelden');
    }

    $geschaeft = null;
    $id = get('id');
    $bilder = [];

    // Maximale Anzahl an Bildern basierend auf Benutzerrolle
    $maxBilder = $kirby->user()->role()->name() === 'premium' ? 6 : 3;

    // Wenn eine ID angegeben ist, versuchen wir das Geschäft zu laden
    if ($id) {
        $geschaeft = $kirby->site()->find('geschaefte')->children()->filter(function ($p) use ($id) {
            return $p->uuid()->toString() === $id;
        })->first();

        // Prüfe, ob der Benutzer das Geschäft bearbeiten darf
        if ($geschaeft && !$geschaeft->isEditable()) {
            go('/konto/meine-geschaefte');
        }

        // Vorhandene Bilder laden
        // Verarbeite hochgeladene Bilder
        if ($geschaeft && !empty($_FILES['images']['name'][0])) {
            $uploadedFiles = $_FILES['images'];

            for ($i = 0; $i < count($uploadedFiles['name']); $i++) {
                if ($uploadedFiles['error'][$i] === UPLOAD_ERR_OK && $uploadedFiles['size'][$i] > 0) {
                    $tempFile = $uploadedFiles['tmp_name'][$i];
                    $fileName = $uploadedFiles['name'][$i];
                    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

                    // Validiere das Dateiformat
                    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                    if (!in_array(strtolower($fileExt), $allowedExtensions)) {
                        continue; // Überspringe nicht erlaubte Dateiformate
                    }

                    // Validiere die Dateigröße (max 5MB)
                    if ($uploadedFiles['size'][$i] > 5 * 1024 * 1024) {
                        continue; // Überspringe zu große Dateien
                    }

                    // Generiere einen eindeutigen Dateinamen
                    $newFileName = $geschaeft->id() . '-' . time() . '-' . $i . '.' . $fileExt;

                    try {
                        // Bild zum Geschäft hinzufügen
                        $newFile = $geschaeft->createFile([
                            'source' => $tempFile,
                            'filename' => $newFileName,
                            'template' => 'image',
                            'content' => [
                                'alt' => $geschaeft->title()->value()
                            ]
                        ]);

                        // Bilder-Anzahl in der Datenbank aktualisieren
                        $bilderzahl = $geschaeft->bilder_anzahl()->toInt() + 1;
                        $geschaeft->update(['bilder_anzahl' => $bilderzahl]);
                    } catch (Exception $e) {
                        // Fehler beim Hochladen protokollieren
                        error_log('Fehler beim Hochladen des Bildes: ' . $e->getMessage());
                    }
                }
            }
        }

// Verarbeite vorhandene Bilder (Löschen nicht mehr gewünschter Bilder)
        if ($geschaeft) {
            $existingImageIds = get('existing_images', []);
            $vorhandeneBilder = $geschaeft->files()->filterBy('type', 'image');

            foreach ($vorhandeneBilder as $bild) {
                // Wenn das Bild nicht mehr in der Liste der existierenden Bilder ist, lösche es
                if (!in_array($bild->id(), $existingImageIds)) {
                    try {
                        $bild->delete();

                        // Bilder-Anzahl in der Datenbank aktualisieren
                        $bilderzahl = $geschaeft->bilder_anzahl()->toInt() - 1;
                        if ($bilderzahl < 0) $bilderzahl = 0;
                        $geschaeft->update(['bilder_anzahl' => $bilderzahl]);
                    } catch (Exception $e) {
                        error_log('Fehler beim Löschen des Bildes: ' . $e->getMessage());
                    }
                }
            }
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
        'wasseranschluss' => $geschaeft->wasseranschluss()->toBool(),
        'youtube_video_id' => $geschaeft->youtube_video_id()->value()
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
                'wasseranschluss' => (bool)get('wasseranschluss'),
                'youtube_video_id' => get('youtube_video_id')
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

                    // Neues Geschäft oder Update
                    if ($geschaeft) {
                        // Bestehendes Geschäft aktualisieren
                        $geschaeft->update($data);

                        // Verarbeite vorhandene Bilder (Löschen nicht mehr gewünschter Bilder)
                        $existingImages = get('existing_images', []);

                        // Hier würde der Code folgen, der die vorhandenen Bilder verwaltet
                        // Bilder löschen, die nicht mehr in $existingImages sind

                        $success = 'Geschäft erfolgreich aktualisiert!';
                    } else {
                        // Neues Geschäft erstellen
                        $newGeschaeft = $kirby->site()->find('geschaefte')->createChild([
                            'slug' => \Kirby\Toolkit\Str::slug($data['title']) . '-' . time(),
                            'template' => 'geschaeft',
                            'content' => $data
                        ]);

                        if ($newGeschaeft) {
                            $geschaeft = $newGeschaeft;
                            $success = 'Geschäft erfolgreich erstellt!';
                        } else {
                            $alert = [
                                'type' => 'error',
                                'message' => 'Das Geschäft konnte nicht gespeichert werden.'
                            ];
                        }
                    }

                    // Verarbeite hochgeladene Bilder
                    if ($geschaeft && isset($_FILES['images'])) {
                        $uploadedFiles = $_FILES['images'];

                        // Hier folgt der Code zum Verarbeiten der hochgeladenen Bilder
                        // Für jedes Bild in $uploadedFiles:
                        // 1. Validiere das Bild (Größe, Format)
                        // 2. Speichere das Bild (abhängig von deiner Speicherlogik für Kirby/Datenbank)
                        // 3. Aktualisiere die Anzahl der Bilder in der Datenbank

                        // Beispiel:
                        /*
                        for ($i = 0; $i < count($uploadedFiles['name']); $i++) {
                            if ($uploadedFiles['error'][$i] === UPLOAD_ERR_OK && $uploadedFiles['size'][$i] > 0) {
                                $tempFile = $uploadedFiles['tmp_name'][$i];
                                $targetFileName = $geschaeft->uuid()->toString() . '-' . time() . '-' . $i . '.jpg';

                                // Bild verarbeiten (z.B. mit Intervention Image)
                                // ...

                                // Bild zum Geschäft hinzufügen
                                $geschaeft->createFile([
                                    'source' => $tempFile,
                                    'filename' => $targetFileName,
                                    'template' => 'image',
                                    'content' => [
                                        'alt' => $geschaeft->title()
                                    ]
                                ]);

                                // Bilder-Anzahl in der Datenbank aktualisieren
                                $bilderzahl = $geschaeft->bilder_anzahl()->toInt() + 1;
                                $geschaeft->update(['bilder_anzahl' => $bilderzahl]);
                            }
                        }
                        */
                    }

                    // Nach erfolgreicher Verarbeitung zur Übersichtsseite umleiten
                    if ($success) {
                        go('/konto/meine-geschaefte?success=' . urlencode($success));
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
        'stromanschluesse' => $stromanschluesse,
        'bilder' => $bilder,
        'maxBilder' => $maxBilder
    ];
};