<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MobilbesarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MobilBesar::create([
            'nama_mobil' => 'Toyota Rush',
            'no_polisi' => 'D 1421 QWE',
            'driver' => 'James',
            'wisata' => 'Tangkuban Perahu',
            'ketersediaan' => 'Tersedia'
        ]);

        \App\Models\MobilBesar::create([
            'nama_mobil' => 'Pajero',
            'no_polisi' => 'D 4321 ZYX',
            'driver' => 'Seno',
            'wisata' => 'Tangkuban Perahu',
            'ketersediaan' => 'Tersedia'
        ]);

        \App\Models\MobilBesar::create([
            'nama_mobil' => 'Fortuner',
            'no_polisi' => 'D 5321 POI',
            'driver' => 'Brandon',
            'wisata' => 'Floating Market',
            'ketersediaan' => 'Tersedia'
        ]);
    }
}
