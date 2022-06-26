<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Booking::create([
            'id_mobil' => 1,
            'nama_mobil' => 'Toyota Avanza',
            'jenis_mobil' => 'Mobil Kecil',
            'wisata' => 'Tangkuban Perahu',
            'id_member' => 1,
            'nama_member' => 'Otniel Abiezer',
            'status' => 'Menunggu Persetujuan'
        ]);

        \App\Models\Booking::create([
            'id_mobil' => 2,
            'nama_mobil' => 'Honda Jazz',
            'jenis_mobil' => 'Mobil Kecil',
            'wisata' => 'Ciwidey',
            'id_member' => 2,
            'nama_member' => 'Winico Fazry',
            'status' => 'Menunggu Persetujuan'
        ]);
    }
}
