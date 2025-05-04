<?php

return function ($kirby, $page) {
    $user = $kirby->user();

    // Redirect, falls nicht eingeloggt
    if (!$user) {
        go('/anmelden');
    }

    $success = false;
    $error = false;
    $data = [];

    // Form wurde abgeschickt
    if ($kirby->request()->is('POST')) {
        // CSRF Token prüfen
        if (csrf(get('csrf')) === false) {
            $error = 'Ungültiger CSRF-Token. Bitte versuche es erneut.';
        } else {
            // Daten einlesen
            $data = [
                'vorname' => get('vorname'),
                'nachname' => get('nachname'),
                'strasse' => get('strasse'),
                'plz' => get('plz'),
                'stadt' => get('stadt'),
                'land' => get('land'),
                'email' => get('email'),
                'telefon' => get('telefon'),
                'website' => get('website'),
                'firmenname' => get('firmenname'),
                'ustid' => get('ustid'),
                'newsletter' => get('newsletter') ? true : false,
            ];

            // Validierung
            $rules = [
                'vorname' => ['required', 'minLength' => 2],
                'nachname' => ['required', 'minLength' => 2],
                'email' => ['required', 'email'],
            ];

            $messages = [
                'vorname' => 'Bitte gib deinen Vornamen ein (mind. 2 Zeichen).',
                'nachname' => 'Bitte gib deinen Nachnamen ein (mind. 2 Zeichen).',
                'email' => 'Bitte gib eine gültige E-Mail-Adresse ein.',
            ];

            if ($invalid = invalid($data, $rules, $messages)) {
                $error = implode('<br>', $invalid);
            } else {
                try {
                    // Benutzer aktualisieren
                    $user->update($data);
                    $success = true;
                } catch (Exception $e) {
                    $error = 'Fehler beim Speichern: ' . $e->getMessage();
                }
            }
        }
    }

    return [
        'user' => $user,
        'success' => $success,
        'error' => $error,
        'data' => $data,
    ];
};