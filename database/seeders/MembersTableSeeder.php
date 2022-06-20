<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('password');
        \App\Models\Member::create([
            'name' => 'Otniel Abiezer',
            'email' => 'otniel@gmail.com',
            'username' => 'otnielabiezer',
            'password' => $password
        ]);

        \App\Models\Member::create([
            'name' => 'Winico Fazry',
            'email' => 'winico@gmail.com',
            'username' => 'winicofazry',
            'password' => $password
        ]);

        \App\Models\Member::create([
            'name' => 'Gilang M Rizky',
            'email' => 'gilang@gmail.com',
            'username' => 'gilangrizky',
            'password' => $password
        ]);

        \App\Models\Member::create([
            'name' => 'Aulia Arief',
            'email' => 'aulia@gmail.com',
            'username' => 'auliaarief',
            'password' => $password
        ]);

        \App\Models\Member::create([
            'name' => 'Rick Astley',
            'email' => 'rickastley@gmail.com',
            'username' => 'rickastley',
            'password' => $password
        ]);
    }
}
