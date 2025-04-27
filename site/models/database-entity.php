<?php

use Kirby\Database\Db;
use Kirby\Toolkit\Str;
use Kirby\Uuid\Uuid;

abstract class DatabaseEntityPage extends Kirby\Cms\Page
{
    abstract function tableName(): string;

    public function uuidNoPrefix(): string
    {
        return str_replace('page://', '', $this->uuid());
    }

    public function delete(bool $force = false): bool
    {
        return $this->queryDb()
            ->where($this->whereClause())
            ->delete();
    }

    public function changeTitle(string $title, ?string $languageCode = null): static
    {
        $this->writeContent(['title' => $title]);
        return $this;
    }

    public function changeSlug(string $slug, ?string $languageCode = null): static
    {
        $this->writeContent(['slug' => Str::slug($slug)]);
        return $this;
    }

    public function readContent(string $languageCode = null): array
    {
        // To mitigate an error when creating new records,
        // this temporary workaround is in place.
        if ($this->content === null) {
            return [
                'status' => 'draft',
            ];
        }
        return parent::readContent($languageCode);
    }

    public function writeContent(array $data, string|null $languageCode = null): bool
    {
        // Prüfen ob ein UUID fehlt und ggf. generieren
        if (!isset($data['uuid']) && !$this->existsInDatabase()) {
            $data['uuid'] = Uuid::generate();
        }

        if ($this->existsInDatabase()) {
            unset($data['uuid']);
            return $this->updateContent($data);
        } else {
            return $this->insertContent($data);
        }
    }

    protected function changeStatusToDraft(): static
    {
        if ($this->isDraft()) {
            return $this;
        }

        $shouldResort = $this->isListed();

        $this->update(['status' => 'draft']);

        if ($shouldResort) {
            $this->resortSiblingsAfterUnlisting();
        }

        return $this;
    }

    protected function changeStatusToUnlisted(): static
    {
        if ($this->isUnlisted()) {
            return $this;
        }

        $shouldResort = $this->isListed();

        $this->update(['status' => 'unlisted']);

        if ($shouldResort) {
            $this->resortSiblingsAfterUnlisting();
        }

        return $this;
    }

    protected function changeStatusToListed(?int $position = null): static
    {
        if ($this->isListed()) {
            return $this;
        }

        $this->update(['status' => 'listed']);

        return $this;
    }

    public function isDraft(): bool
    {
        return $this->hasStatus('draft');
    }

    public function isUnlisted(): bool
    {
        return $this->hasStatus('unlisted');
    }

    public function isListed(): bool
    {
        return $this->hasStatus('listed');
    }

    private function hasStatus(string $status): bool
    {
        return ($this->content()->data()['status'] ?? '') === $status;
    }

    private function insertContent(array $data): bool
    {
        // Wenn kein Titel gesetzt ist, abbrechen
        if (!isset($data['title'])) {
            return false;
        }

        // Stelle sicher, dass ein Slug generiert wird
        if (!isset($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Stelle sicher, dass owner gesetzt ist
        if (!isset($data['owner']) && kirby()->user()) {
            $data['owner'] = kirby()->user()->id();
        }

        return $this->queryDb()->insert($data);
    }

    private function updateContent(array $data): bool
    {
        return $this->queryDb()
            ->where($this->whereClause())
            ->update($data);
    }

    private function existsInDatabase(): bool
    {
        return $this->queryDb()
                ->select('id')
                ->where($this->whereClause())
                ->count() > 0;
    }

    protected function queryDb(): Kirby\Database\Query
    {
        return Db::table($this->tableName());
    }

    private function whereClause(): array
    {
        return ['id' => $this->uuidNoPrefix()];
    }
}