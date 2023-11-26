<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateLikes extends AbstractMigration
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
        $table = $this->table('likes', ['id' => true, 'primary_key' =>'id']);
        $table
            ->addColumn('user_id', 'integer', [
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('post_id', 'integer', [
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('delete_flg', 'integer', [
                'limit' => 50,
            ])
            ->create();
    }
}
