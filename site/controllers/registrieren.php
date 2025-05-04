<?php

use Kirby\Exception\PermissionException;

return function ($kirby) {
    // Wenn bereits eingeloggt, zur Startseite weiterleiten
    if ($kirby->user()) {
        go('konto');
    }

    $errors = [];

    // Form submission
    if (get('register') && $kirby->request()->is('POST')) {
        // CSRF-Check
        if (csrf(get('csrf')) === true) {
            // Formulardaten
            $data = [
                'email' => get('email'),
                'name' => get('name'),
                'password' => get('password'),
            ];

            // Validierungsregeln
            $rules = [
                'email' => ['required', 'email'],
                'name' => ['required', 'minLength' => 3],
                'password' => ['required', 'minLength' => 3], // Angepasst wie im ursprünglichen Code
            ];

            // Fehlermeldungen
            $messages = [
                'email' => 'Please enter a valid email address',
                'name' => 'Your name must have at least 3 characters',
                'password' => 'Your name must have at least 3 characters',
            ];

            // Daten validieren
            if ($invalid = invalid($data, $rules, $messages)) {
                $errors = $invalid;
            } else {
                // Authentifizierung als Kirby für Benutzererstellung
                $kirby->impersonate('kirby');
                try {
                    // Benutzer erstellen
                    $user = $kirby->users()->create([
                        'email' => $data['email'],
                        'role' => 'free', // Standardrolle für neue Benutzer
                        'language' => 'de',
                        'name' => $data['name'],
                        'password' => $data['password'],
                    ]);

                    if (isset($user) === true) {
                        // Nach erfolgreicher Registrierung zur Anmeldeseite
                        try {
                            $status = $kirby->auth()->createChallenge($user->email(), false, 'login');
                            go('anmelden');
                        } catch (PermissionException $e) {
                            $errors[] = $e->getMessage();
                        }
                    }
                } catch (Exception $e) {
                    $errors[] = $e->getMessage();
                }
            }
        } else {
            $errors[] = 'Invalid CSRF token.';
        }
    }

    return [
        'errors' => $errors
    ];
};