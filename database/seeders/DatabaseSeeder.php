<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MobilkecilsTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(MobilbesarsTableSeeder::class);
    }
}
