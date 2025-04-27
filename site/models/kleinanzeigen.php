<?php
use Kirby\Cms\Page;
use Kirby\Cms\Pages;
use Kirby\Database\Db;

class KleinAnzeigenPage extends Page
{
    static string $TABLE_NAME = 'kleinanzeigen';

    public function children(): Pages
    {
        $entries = [];
        foreach (Db::select(self::$TABLE_NAME) as $entry) {
            $entries[] = [
                'slug'     => $entry->slug(),
                'num'      => $entry->status() === 'aktiv' ? 0 : null,
                'template' => 'kleinanzeige',
                'model'    => 'kleinanzeige',
                'content'  => [
                    'title' => $entry->title(),
                    'uuid'  => $entry->id(),
                    'owner' => $entry->owner(),
                    'preis' => $entry->preis(),
                    'verhandlungsbasis' => $entry->verhandlungsbasis(),
                    'kategorie' => $entry->kategorie(),
                    'beschreibung' => $entry->beschreibung(),
                    'plz' => $entry->plz(),
                    'ort' => $entry->ort(),
                    'status' => $entry->status(),
                    'erstellungsdatum' => $entry->erstellungsdatum(),
                    'ablaufdatum' => $entry->ablaufdatum(),
                    'hervorgehoben' => $entry->hervorgehoben(),
                    'hervorgehoben_bis' => $entry->hervorgehoben_bis(),
                    'oben_anzeigen' => $entry->oben_anzeigen(),
                    'oben_anzeigen_bis' => $entry->oben_anzeigen_bis(),
                ]
            ];
        }
        return Pages::factory($entries, $this);
    }
}