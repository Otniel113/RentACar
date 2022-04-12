<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MobilkecilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MobilKecil::create([
            'nama_mobil' => 'Toyota Avanza',
            'no_polisi' => 'D 1111 AAA',
            'driver' => 'Garok',
            'wisata' => 'Tangkuban Perahu',
            'ketersediaan' => 'Tersedia'
        ]);

        \App\Models\MobilKecil::create([
            'nama_mobil' => 'Honda Jazz',
            'no_polisi' => 'D 1234 XYZ',
            'driver' => 'Stachu Jones',
            'wisata' => 'Ciwidey',
            'ketersediaan' => 'Tersedia'
        ]);

        \App\Models\MobilKecil::create([
            'nama_mobil' => 'Toyota Agya',
            'no_polisi' => 'D 1357 ABC',
            'driver' => 'Gunawan Sate',
            'wisata' => 'Floating Market',
            'ketersediaan' => 'Tersedia'
        ]);
    }
}
