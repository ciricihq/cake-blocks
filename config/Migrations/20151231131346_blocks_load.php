<?php
use Cake\ORM\TableRegistry;
use Migrations\AbstractMigration;

class BlocksLoad extends AbstractMigration
{
    /**
     * Up Method.
     *
     * Insert records
     * @return void
     */
    public function change()
    {
        $table = $this->table('bl_blocks');

        $table->addColumn('title', 'string', [
            'limit'   => 255,
            'null'    => false,
        ])->addColumn('slug', 'string', [
            'limit'   => 255,
            'null'    => false,
        ])->addColumn('content', 'text', [
            'null'    => true,
        ])->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ])->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ])->create();
    }
}
