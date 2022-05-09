<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Администратор',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin'),
                'is_admin' => 1,
            ],
            [
                'name' => 'Пользователь',
                'email' => 'user@example.com',
                'password' => bcrypt('user'),
                'is_admin' => 0,
            ]
        );
    }
}
