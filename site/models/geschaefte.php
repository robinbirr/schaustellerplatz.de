<?php
use Kirby\Cms\Page;
use Kirby\Cms\Pages;
use Kirby\Database\Db;

class GeschaeftePage extends Page
{
    static string $TABLE_NAME = 'geschaefte';
    public function children(): Pages
    {
        $entries = [];
        foreach (Db::select(self::$TABLE_NAME) as $entry) {
            $entries[] = [
                'slug'     => $entry->slug(),
                'num'      => $entry->status() === 'listed' ? 0 : null,
                'template' => 'geschaeft',
                'model'    => 'geschaeft',
                'content'  => [
                    'title' => $entry->title(),
                    'uuid'  => $entry->id(),
                    'owner' => $entry->owner(),
                    'creation_date' => $entry->creation_date(),
                    'typ' => $entry->typ(),
                    'status' => $entry->status(),
                ]
            ];
        }
        return Pages::factory($entries, $this);
    }
}