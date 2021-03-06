<?php

class m170101_000001_workflow extends tecnocen\rmdb\migrations\CreatePersistentEntity
{
    /**
     * @inhertidoc
     */
    public function getTableName()
    {
        return 'workflow';
    }

    /**
     * @inhertidoc
     */
    public function columns()
    {
        return [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->unique()->notNull(),
        ];
    }
}
