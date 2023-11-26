<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('posts', ['id' => true, 'primary_key' => 'id']);
        $table
            ->addColumn('user_id', 'integer', [
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('title', 'string', [
                'limit' => 150,
                'null' => false
            ])
            ->addColumn('discription', 'text', [
                'limit' => 255,
            ])
            ->addColumn('body', 'text')
            ->addColumn('created_at', 'datetime')
            ->addColumn('modified_at', 'datetime')
            ->create();
    }
}
