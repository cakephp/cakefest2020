<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Init extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('users')
            ->addColumn('first_name', 'string', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('last_name', 'string', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('email', 'string', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('password', 'string', [
                'null' => false,
            ])
            ->addColumn('active', 'boolean', [
                'default' => false,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'null' => false,
            ])
            ->create();

        $this->table('groups')
            ->addColumn('name', 'string', [
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'null' => false,
            ])
            ->create();

        $this->table('groups_users')
            ->addColumn('group_id', 'integer', [
                'null' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'null' => false,
            ])
            ->addColumn('role', 'string', [
                'null' => false,
                'default' => 'user',
            ])
            ->create();

        $this->table('tags')
            ->addColumn('name', 'string', [
                'null' => false,
            ])
            ->addColumn('occurrence', 'integer', [
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'null' => false,
            ])
            ->create();

        $this->table('tagged')
            ->addColumn('table_alias', 'string', [
                'null' => false,
            ])
            ->addColumn('foreign_key', 'integer', [
                'null' => false,
            ])
            ->addColumn('tag_id', 'integer', [
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'null' => false,
            ])
            ->create();

        $this->table('files')
            ->addColumn('group_id', 'integer', [
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'null' => false,
            ])
            ->addColumn('path', 'string', [
                'null' => false,
            ])
            ->addColumn('metadata', 'jsonb', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('created', 'datetime', [
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'null' => false,
            ])
            ->create();

    }
}
