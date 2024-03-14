<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function mengirim(Request $request)
    {
        $nim_mhs = $request->input('nim_mhs');
        $alamat = $request->input('alamat');
        $ttl = $request->input('ttl');
        $status = $request->input('status');

        DB::table('mahasiswa')->insert([
            'nim_mhs' => $nim_mhs,
            'alamat' => $alamat,
            'ttl' => $ttl,
            'status' => $status,
        ]);

        $mahasiswaBaru = (object) [
            'nim_mhs' => $nim_mhs,
            'alamat' => $alamat,
            'ttl' => $ttl,
            'status' => $status,
        ];

        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan!')->with('mahasiswaBaru', $mahasiswaBaru);
    }
}
