-- Tabelle für Schausteller Geschäfte
CREATE TABLE IF NOT EXISTS geschaefte (
                                          id VARCHAR(36) PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    owner VARCHAR(100) NOT NULL,  -- Benutzer-ID des Eigentümers
    typ VARCHAR(50) NOT NULL,      -- Art des Geschäfts (Fahrgeschäft, Imbiss, etc.)
    beschreibung TEXT,
    front_meters FLOAT,           -- Frontmeter des Geschäfts
    tiefe_meters FLOAT,           -- Tiefe des Geschäfts in Metern
    hoehe_meters FLOAT,           -- Höhe des Geschäfts in Metern
    stromanschluss VARCHAR(50),   -- Benötigter Stromanschluss
    wasseranschluss BOOLEAN DEFAULT FALSE,
    bilder_anzahl INT DEFAULT 0,  -- Anzahl der hochgeladenen Bilder
    youtube_video_id VARCHAR(20), -- YouTube-Video-ID für Premium-Nutzer
    status VARCHAR(20) DEFAULT 'draft', -- draft, unlisted, listed
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    published_date DATETIME,
    last_modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX(owner),
    INDEX(status),
    INDEX(typ)
    );

-- Tabelle für Kleinanzeigen
CREATE TABLE IF NOT EXISTS kleinanzeigen (
                                             id VARCHAR(36) PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    owner VARCHAR(100) NOT NULL,  -- Benutzer-ID des Erstellers
    preis DECIMAL(10,2),
    verhandlungsbasis BOOLEAN DEFAULT FALSE,
    kategorie VARCHAR(50),        -- Kategorie der Anzeige
    beschreibung TEXT,
    kontakt_email VARCHAR(255),
    kontakt_telefon VARCHAR(50),
    plz VARCHAR(10),
    ort VARCHAR(100),
    bilder_anzahl INT DEFAULT 0,
    hervorgehoben BOOLEAN DEFAULT FALSE,  -- Premium-Feature: Anzeige hervorheben
    hervorgehoben_bis DATETIME,           -- Ablaufdatum für Hervorhebung
    oben_anzeigen BOOLEAN DEFAULT FALSE,  -- Premium-Feature: Anzeige immer oben anzeigen
    oben_anzeigen_bis DATETIME,           -- Ablaufdatum für oben_anzeigen
    status VARCHAR(20) DEFAULT 'aktiv',   -- aktiv, verkauft, abgelaufen
    erstellungsdatum DATETIME DEFAULT CURRENT_TIMESTAMP,
    ablaufdatum DATETIME,                 -- Anzeige läuft automatisch nach 60 Tagen ab
    INDEX(owner),
    INDEX(status),
    INDEX(kategorie),
    INDEX(hervorgehoben),
    INDEX(oben_anzeigen)
    );

-- Tabelle für Jobangebote
CREATE TABLE IF NOT EXISTS jobangebote (
                                           id VARCHAR(36) PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    owner VARCHAR(100) NOT NULL,  -- Benutzer-ID des Erstellers
    beschreibung TEXT,
    anforderungen TEXT,
    gehalt VARCHAR(100),
    arbeitsort VARCHAR(255),
    zeitraum_von DATE,
    zeitraum_bis DATE,
    kontakt_email VARCHAR(255),
    kontakt_telefon VARCHAR(50),
    hervorgehoben BOOLEAN DEFAULT FALSE,  -- Premium-Feature
    hervorgehoben_bis DATETIME,
    oben_anzeigen BOOLEAN DEFAULT FALSE,  -- Premium-Feature
    oben_anzeigen_bis DATETIME,
    status VARCHAR(20) DEFAULT 'aktiv',   -- aktiv, besetzt, abgelaufen
    erstellungsdatum DATETIME DEFAULT CURRENT_TIMESTAMP,
    ablaufdatum DATETIME,                 -- Nach 60 Tagen
    INDEX(owner),
    INDEX(status),
    INDEX(hervorgehoben),
    INDEX(oben_anzeigen)
    );

-- Tabelle für Platzangebote
CREATE TABLE IF NOT EXISTS platzangebote (
                                             id VARCHAR(36) PRIMARY KEY,
    veranstaltungsname VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    creator VARCHAR(100),              -- Optional: ID des Erstellers, falls angemeldet
    beschreibung TEXT,
    von_datum DATE NOT NULL,
    bis_datum DATE NOT NULL,
    plz VARCHAR(10) NOT NULL,
    ort VARCHAR(100) NOT NULL,
    strasse VARCHAR(255),
    kontaktperson VARCHAR(100) NOT NULL,
    kontakt_email VARCHAR(255) NOT NULL,
    kontakt_telefon VARCHAR(50),
    lat DECIMAL(10,8),                 -- Breitengrad für Umkreissuche
    lng DECIMAL(11,8),                 -- Längengrad für Umkreissuche
    gesuchte_kategorie VARCHAR(50),    -- Art des gesuchten Geschäfts
    budget DECIMAL(10,2),
    hervorgehoben BOOLEAN DEFAULT FALSE,
    hervorgehoben_bis DATETIME,
    status VARCHAR(20) DEFAULT 'unveröffentlicht', -- unveröffentlicht, veröffentlicht, abgelaufen
    erstellungsdatum DATETIME DEFAULT CURRENT_TIMESTAMP,
    INDEX(status),
    INDEX(von_datum),
    INDEX(bis_datum),
    INDEX(gesuchte_kategorie),
    INDEX(plz),
    SPATIAL INDEX(lat, lng)            -- Räumlicher Index für Umkreissuche
    );

-- Tabelle für Premium-Abonnements
CREATE TABLE IF NOT EXISTS abonnements (
                                           id VARCHAR(36) PRIMARY KEY,
    user_id VARCHAR(100) NOT NULL,     -- Benutzer-ID
    paket VARCHAR(20) NOT NULL,        -- 'premium_monthly', 'premium_yearly'
    zahlungsmethode VARCHAR(20),       -- 'paypal', 'lastschrift'
    zahlungsreferenz VARCHAR(100),     -- PayPal-Transaktions-ID oder ähnliches
    preis DECIMAL(10,2) NOT NULL,
    start_datum DATETIME NOT NULL,
    ende_datum DATETIME NOT NULL,
    automatische_verlaengerung BOOLEAN DEFAULT TRUE,
    status VARCHAR(20) DEFAULT 'aktiv', -- aktiv, gekündigt, abgelaufen
    letzte_zahlung DATETIME,
    naechste_zahlung DATETIME,
    INDEX(user_id),
    INDEX(status),
    INDEX(ende_datum)
    );

-- Tabelle für E-Mail-Benachrichtigungen (für Platzangebote im Umkreis)
CREATE TABLE IF NOT EXISTS benachrichtigungen (
                                                  id VARCHAR(36) PRIMARY KEY,
    user_id VARCHAR(100) NOT NULL,
    platzangebot_id VARCHAR(36) NOT NULL,
    gesendet_am DATETIME DEFAULT CURRENT_TIMESTAMP,
    gelesen BOOLEAN DEFAULT FALSE,
    INDEX(user_id),
    INDEX(platzangebot_id)
    );