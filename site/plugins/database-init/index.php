<?php

use Kirby\Database\Db;
use Kirby\Cms\App as Kirby;

Kirby::plugin('schaustellerplatz/database-init', [
    'hooks' => [
        'system.loadPlugins:after' => function () {
            // Direkt die initDatabase-Funktion aufrufen, ohne $this zu verwenden
            initDatabase();
        }
    ]
]);

function initDatabase() {
    try {
        // Geschäfte-Tabelle erstellen, falls nicht vorhanden
        Db::execute("
        CREATE TABLE IF NOT EXISTS geschaefte (
            id VARCHAR(36) PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            slug VARCHAR(255) NOT NULL,
            owner VARCHAR(100) NOT NULL,
            typ VARCHAR(50) NOT NULL,
            beschreibung TEXT,
            front_meters FLOAT,
            tiefe_meters FLOAT,
            hoehe_meters FLOAT,
            stromanschluss VARCHAR(50),
            wasseranschluss BOOLEAN DEFAULT FALSE,
            bilder_anzahl INT DEFAULT 0,
            youtube_video_id VARCHAR(20),
            status VARCHAR(20) DEFAULT 'draft',
            creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
            published_date DATETIME,
            last_modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            INDEX(owner),
            INDEX(status),
            INDEX(typ)
        )
        ");

        // Kleinanzeigen-Tabelle erstellen, falls nicht vorhanden
        Db::execute("
                CREATE TABLE IF NOT EXISTS kleinanzeigen (
                    id VARCHAR(36) PRIMARY KEY,
                    title VARCHAR(255) NOT NULL,
                    slug VARCHAR(255) NOT NULL,
                    owner VARCHAR(100) NOT NULL,
                    preis DECIMAL(10,2),
                    verhandlungsbasis BOOLEAN DEFAULT FALSE,
                    kategorie VARCHAR(50),
                    beschreibung TEXT,
                    kontakt_email VARCHAR(255),
                    kontakt_telefon VARCHAR(50),
                    plz VARCHAR(10),
                    ort VARCHAR(100),
                    bilder_anzahl INT DEFAULT 0,
                    hervorgehoben BOOLEAN DEFAULT FALSE,
                    hervorgehoben_bis DATETIME,
                    oben_anzeigen BOOLEAN DEFAULT FALSE,
                    oben_anzeigen_bis DATETIME,
                    status VARCHAR(20) DEFAULT 'aktiv',
                    erstellungsdatum DATETIME DEFAULT CURRENT_TIMESTAMP,
                    ablaufdatum DATETIME,
                    INDEX(owner),
                    INDEX(status),
                    INDEX(kategorie),
                    INDEX(hervorgehoben),
                    INDEX(oben_anzeigen)
                )
                ");

        // Jobangebote-Tabelle erstellen, falls nicht vorhanden
        Db::execute("
                CREATE TABLE IF NOT EXISTS jobangebote (
                    id VARCHAR(36) PRIMARY KEY,
                    title VARCHAR(255) NOT NULL,
                    slug VARCHAR(255) NOT NULL,
                    owner VARCHAR(100) NOT NULL,
                    beschreibung TEXT,
                    anforderungen TEXT,
                    gehalt VARCHAR(100),
                    arbeitsort VARCHAR(255),
                    zeitraum_von DATE,
                    zeitraum_bis DATE,
                    kontakt_email VARCHAR(255),
                    kontakt_telefon VARCHAR(50),
                    hervorgehoben BOOLEAN DEFAULT FALSE,
                    hervorgehoben_bis DATETIME,
                    oben_anzeigen BOOLEAN DEFAULT FALSE,
                    oben_anzeigen_bis DATETIME,
                    status VARCHAR(20) DEFAULT 'aktiv',
                    erstellungsdatum DATETIME DEFAULT CURRENT_TIMESTAMP,
                    ablaufdatum DATETIME,
                    INDEX(owner),
                    INDEX(status),
                    INDEX(hervorgehoben),
                    INDEX(oben_anzeigen)
                )
                ");

        // Platzangebote-Tabelle erstellen, falls nicht vorhanden
        Db::execute("
                CREATE TABLE IF NOT EXISTS platzangebote (
                    id VARCHAR(36) PRIMARY KEY,
                    veranstaltungsname VARCHAR(255) NOT NULL,
                    slug VARCHAR(255) NOT NULL,
                    creator VARCHAR(100),
                    beschreibung TEXT,
                    von_datum DATE NOT NULL,
                    bis_datum DATE NOT NULL,
                    plz VARCHAR(10) NOT NULL,
                    ort VARCHAR(100) NOT NULL,
                    strasse VARCHAR(255),
                    kontaktperson VARCHAR(100) NOT NULL,
                    kontakt_email VARCHAR(255) NOT NULL,
                    kontakt_telefon VARCHAR(50),
                    lat DECIMAL(10,8),
                    lng DECIMAL(11,8),
                    gesuchte_kategorie VARCHAR(50),
                    budget DECIMAL(10,2),
                    hervorgehoben BOOLEAN DEFAULT FALSE,
                    hervorgehoben_bis DATETIME,
                    status VARCHAR(20) DEFAULT 'unveröffentlicht',
                    erstellungsdatum DATETIME DEFAULT CURRENT_TIMESTAMP,
                    INDEX(status),
                    INDEX(von_datum),
                    INDEX(bis_datum),
                    INDEX(gesuchte_kategorie),
                    INDEX(plz)
                )
                ");

        // Abonnements-Tabelle erstellen, falls nicht vorhanden
        Db::execute("
                CREATE TABLE IF NOT EXISTS abonnements (
                    id VARCHAR(36) PRIMARY KEY,
                    user_id VARCHAR(100) NOT NULL,
                    paket VARCHAR(20) NOT NULL,
                    zahlungsmethode VARCHAR(20),
                    zahlungsreferenz VARCHAR(100),
                    preis DECIMAL(10,2) NOT NULL,
                    start_datum DATETIME NOT NULL,
                    ende_datum DATETIME NOT NULL,
                    automatische_verlaengerung BOOLEAN DEFAULT TRUE,
                    status VARCHAR(20) DEFAULT 'aktiv',
                    letzte_zahlung DATETIME,
                    naechste_zahlung DATETIME,
                    INDEX(user_id),
                    INDEX(status),
                    INDEX(ende_datum)
                )
                ");

        // Benachrichtigungen-Tabelle erstellen, falls nicht vorhanden
        Db::execute("
                CREATE TABLE IF NOT EXISTS benachrichtigungen (
                    id VARCHAR(36) PRIMARY KEY,
                    user_id VARCHAR(100) NOT NULL,
                    platzangebot_id VARCHAR(36) NOT NULL,
                    gesendet_am DATETIME DEFAULT CURRENT_TIMESTAMP,
                    gelesen BOOLEAN DEFAULT FALSE,
                    INDEX(user_id),
                    INDEX(platzangebot_id)
                )
                ");

    } catch (\Exception $e) {
        // Log den Fehler, aber lass die Website weiterlaufen
        error_log('Fehler bei der Initialisierung der Datenbank: ' . $e->getMessage());
    }
}