<?php
require_once __DIR__ . '/database-entity.php';
class GeschaeftPage extends DatabaseEntityPage
{
    public function tableName(): string
    {
        return 'geschaefte';
    }
}

