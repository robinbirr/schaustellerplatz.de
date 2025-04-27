<?php
require_once __DIR__ . '/database-entity.php';

class GeschaeftPage extends DatabaseEntityPage
{
    public function tableName(): string
    {
        return 'geschaefte';
    }

    // Methode um zu prüfen, ob der aktuelle Benutzer das Geschäft bearbeiten darf
    public function isEditable(): bool
    {
        $user = kirby()->user();
        if (!$user) return false;

        // Admin darf alles bearbeiten
        if ($user->role()->name() === 'admin') return true;

        // Owner darf sein eigenes Geschäft bearbeiten
        return $this->owner() === $user->id();
    }

    // Methode um die maximale Anzahl der Bilder basierend auf dem Benutzertyp zu bestimmen
    public function maxBilder(): int
    {
        $user = kirby()->user();
        if (!$user) return 0;

        return $user->role()->name() === 'premium' ? 6 : 3;
    }

    // Methode um zu prüfen, ob YouTube-Videos erlaubt sind
    public function youtubeAllowed(): bool
    {
        $user = kirby()->user();
        if (!$user) return false;

        return $user->role()->name() === 'premium';
    }
}