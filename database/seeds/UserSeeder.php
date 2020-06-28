<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'usuario administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}

