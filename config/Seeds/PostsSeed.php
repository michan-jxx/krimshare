<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
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
                'id' => 3,
                'user_id' => 3,
                'title' => '3番目の投稿',
                'discription' => '3番目の投稿の概要',
                'body' => '3番目の投稿の内容',
                'created_at' => '2023-11-20 10:00:00',
                'modified_at' => '2023-11-20 10:00:00',
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'title' => '4番目の投稿',
                'discription' => '4番目の投稿の概要',
                'body' => '4番目の投稿の内容',
                'created_at' => '2023-11-20 10:00:00',
                'modified_at' => '2023-11-20 10:00:00',
            ],
            [
                'id' => 5,
                'user_id' => 5,
                'title' => '5番目の投稿',
                'discription' => '5番目の投稿の概要',
                'body' => '5番目の投稿の内容',
                'created_at' => '2023-11-20 10:00:00',
                'modified_at' => '2023-11-20 10:00:00',
            ]

        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
