<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('password');
        \App\Models\User::create([
            'name' => 'Admin 2',
            'username' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'password' => $password
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);

    }
}
