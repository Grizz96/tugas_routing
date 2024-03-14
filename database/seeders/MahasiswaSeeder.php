<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [
        'nim_mhs' => 'E41222171',
        'alamat' => 'Jember',
        'ttl' => '2003-11-11', // Assuming ttl is a date field, format it accordingly
        'status' => 'aktif',
    ];

    $dataArray = [$data]; // Menjadikan $data sebagai elemen tunggal dalam array

    $success = DB::table('mahasiswa')->insert($dataArray);

    if ($success) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data!";
    }
}

}