<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class LikesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'user_id' => 1,
                'post_id' => 1,
                'delete_flg' => 0,
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'post_id' => 2,
                'delete_flg' => 0,
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'post_id' => 1,
                'delete_flg' => 0,
            ]

        ];

        $table = $this->table('likes');
        $table->insert($data)->save();
    }
}
