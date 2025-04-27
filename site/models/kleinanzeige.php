<?php
require_once __DIR__ . '/database-entity.php';

class KleinAnzeigePage extends DatabaseEntityPage
{
    public function tableName(): string
    {
        return 'kleinanzeigen';
    }

    public function isEditable(): bool
    {
        $user = kirby()->user();
        if (!$user) return false;

        if ($user->role()->name() === 'admin') return true;

        return $this->owner() === $user->id();
    }

    // Prüfen, ob die Anzeige hervorgehoben werden kann
    public function canHighlight(): bool
    {
        return true; // Jede Anzeige kann gegen Bezahlung hervorgehoben werden
    }

    // Prüfen, ob die Anzeige abgelaufen ist
    public function isExpired(): bool
    {
        if (!$this->ablaufdatum()->exists()) return false;

        $ablaufdatum = strtotime($this->ablaufdatum()->value());
        return $ablaufdatum < time();
    }

    // Prüfen, ob die Hervorhebung aktiv ist
    public function isHighlighted(): bool
    {
        if (!$this->hervorgehoben()->toBool()) return false;

        if (!$this->hervorgehoben_bis()->exists()) return false;

        $bis = strtotime($this->hervorgehoben_bis()->value());
        return $bis > time();
    }
}