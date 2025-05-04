<?php
use Kirby\Uuid\Uuid;
return [
    'debug' => true,
    'locale' => 'de_DE.UTF-8',
    'db' => [
        'host'     => 'sql695.your-server.de',
        'database' => 'birrwerk_schaustellerplatz',
        'user'     => 'birrwerk_sp_ro',
        'password' => 'GLcSY?cnSCW2dZK#?Ad',
        'charset'  => 'utf8mb4',
        'options'  => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_PERSISTENT => true // Für bessere Performance
        ]
    ],
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'mail.your-server.de',
            'port' => 587,
            'security' => true,
            'auth' => true,
            'username' => 'noreply@schaustellerplatz.de',
            'password' => 'Wui3Y?xK6E!w25?Pi30',
        ]
    ],
    'auth' => [
        'methods' => ['password'],
        'timeout' => 60 * 24, // 24 Stunden Session-Timeout
        'expire' => 60 * 24 * 14 // 14 Tage Cookie-Laufzeit
    ],
    'routes' => [
        [
            'pattern' => 'logout',
            'action'  => function() {

                if ($user = kirby()->user()) {
                    $user->logout();
                }

                go('home');

            }
        ],
        [
            'pattern' => 'konto/mein-profil',
            'method' => 'GET|POST',
            'action'  => function () {
                return Page::factory([
                    'slug' => 'konto/mein-profil',
                    'template' => 'konto/mein-profil/konto-mein-profil',
                    'content' => [
                        'title' => 'Mein Profil',
                        'uuid'  => Uuid::generate(),
                    ]
                ]);
            }
        ],
        [
            'pattern' => 'konto/mein-profil/kontaktdaten',
            'action'  => function () {
                return Page::factory([
                    'slug' => 'konto/mein-profil/kontaktdaten',
                    'template' => 'konto/mein-profil/konto-mein-profil-kontaktdaten',
                    'model' => 'virtual',
                    'content' => [
                        'title' => 'Kontaktdaten',
                        'uuid'  => Uuid::generate(),
                    ]
                ]);
            }
        ],
        [
            'pattern' => 'konto/mein-paket',
            'action'  => function () {
                return Page::factory([
                    'slug' => 'konto/mein-paket',
                    'template' => 'konto/mein-paket/konto-mein-paket',
                    'model' => 'virtual',
                    'content' => [
                        'title' => 'Mein Paket',
                        'uuid'  => Uuid::generate(),
                    ]
                ]);
            }
        ],
        [
            'pattern' => 'konto/bestellen',
            'action'  => function () {
                return Page::factory([
                    'slug' => 'konto/bestellen',
                    'template' => 'konto/mein-paket/konto-mein-paket-bestellen',
                    'model' => 'virtual',
                    'content' => [
                        'title' => 'Mein Paket',
                        'uuid'  => Uuid::generate(),
                    ]
                ]);
            }
        ],
        [
            'pattern' => 'konto/meine-kleinanzeigen/anzeige-aufgeben',
            'action'  => function () {
                return Page::factory([
                    'slug' => 'konto/meine-kleinanzeigen/anzeige-aufgeben',
                    'template' => 'konto-meine-kleinanzeigen-anzeige-aufgeben',
                    'model' => 'virtual',
                    'content' => [
                        'title' => 'Kleinanzeige aufgeben',
                        'uuid'  => Uuid::generate(),
                    ]
                ]);
            }
        ],
        [
            'pattern' => 'konto/meine-geschaefte/geschaeft-eintragen',
            'method' => 'GET|POST|DELETE',
            'action'  => function () {
                return Page::factory([
                    'slug' => 'konto/meine-geschaefte/geschaeft-eintragen',
                    'template' => 'konto-meine-geschaefte-geschaeft-eintragen',
                    'model' => 'virtual',
                    'content' => [
                        'title' => 'Geschäft eintragen',
                        'uuid'  => Uuid::generate(),
                    ]
                ]);
            }
        ]
    ],
];
