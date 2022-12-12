<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
        $dataUser = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Thoriq',
                'email' => 'thoriq@gmail.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Harizul',
                'email' => 'harizul@gmail.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Saya',
                'email' => 'saya@gmail.com',
                'password' => bcrypt('SayaSaya'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Kamu',
                'email' => 'kamu@gmail.com',
                'password' => bcrypt('KamuKamu'),
                'created_at' => Carbon::now(),
            ],
        ];

        foreach ($dataUser as $value) {
            User::create($value);
        }
    }
}
