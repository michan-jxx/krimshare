<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'user_name' => 'admin',
                'email' => 'test@test.test1',
                'password' => $this->_setPassword('admin'),
                'created_at' => '2023-11-10 10:00:00',
                'modified_at' => '2023-11-10 10:00:00',
            ],
            [
                'user_name' => 'honda',
                'email' => 'test@test.test2',
                'password' => $this->_setPassword('admin'),
                'created_at' => '2023-11-10 10:00:00',
                'modified_at' => '2023-11-10 10:00:00',
            ]

        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
