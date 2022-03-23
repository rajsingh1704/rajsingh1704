<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Aditya Raj Singh',
            'email' => 'test@bunkinfotech.in',
            'userType' => '1',
            'profileImage' => 'default.png',
            'password' => '$2y$10$MNkyXvmi1JuloYC./2.BuuDyQUIYs6ag9HwFjSaydDMNLwtQzFsV.' 
        ]);
    }
}
