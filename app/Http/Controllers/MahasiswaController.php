<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function getMahasiswa($nim)
    {
        $mhs = Mahasiswa::where('nim', $nim)->first();
        if ($mhs) {
            return response()->json(['mahasiswa' => $mhs]);
        }
        return response()->json(['mahasiswa' => null]);
    }
}
