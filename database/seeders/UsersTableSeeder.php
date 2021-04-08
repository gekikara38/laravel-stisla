<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'level' => 'admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('admin1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Joko',
                'level' => 'user',
                'email' => 'joko@test.com',
                'password' => Hash::make('joko1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],]
        );
    }
}
