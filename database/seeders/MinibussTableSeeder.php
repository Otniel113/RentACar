<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MinibussTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Minibus::create([
            'nama_mobil' => 'Luxio',
            'no_polisi' => 'D 1982 QWE',
            'driver' => 'Agus',
            'wisata' => 'Tangkuban Perahu',
            'ketersediaan' => 'Tersedia',
        ]);

        \App\Models\Minibus::create([
            'nama_mobil' => 'Grandmax',
            'no_polisi' => 'D 8897 YBZ',
            'driver' => 'Yanto',
            'wisata' => 'Braga',
            'ketersediaan' => 'Tersedia',
        ]);

        \App\Models\Minibus::create([
            'nama_mobil' => 'Carry',
            'no_polisi' => 'D 7653 PPP',
            'driver' => 'Pancong',
            'wisata' => 'Floating Market',
            'ketersediaan' => 'Tersedia',
        ]);
    }
}
