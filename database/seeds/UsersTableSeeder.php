<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'cid' => '0',
            'name' => 'Boss Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin@admin.com'),
            'avatar' => '',
            'level' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        \App\User::insert([
            'cid' => '0',
            'name' => 'Normal User',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user@user.com'),
            'avatar' => '',
            'level' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);    
    }
}
