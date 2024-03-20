<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = DB::Table('mahasiswas')
            ->join('beasiswas', 'mahasiswas.nim', 'beasiswas.nim')
            ->select('mahasiswas.*', 'beasiswas.semester as semester', 'beasiswas.beasiswa as beasiswa', 'beasiswas.berkas as berkas', 'beasiswas.status_ajuan as status_ajuan')
            ->get();
        $countAkademik = DB::Table('beasiswas')->where('beasiswa', "Beasiswa Akademik")->count();
        $countNonAkademik = DB::Table('beasiswas')->where('beasiswa', "Beasiswa Non Akademik")->count();
        return view('usermhs.index', compact('data', 'countAkademik', 'countNonAkademik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $ipk = rand(20, 40);
        $ipk /= 10;
        return view('usermhs.create', compact('ipk'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $beasiswa = new beasiswa();

        $request->validate(
            [
                'nim' => 'required|unique:App\Models\beasiswa',
                'semester' => 'required|numeric',
                'beasiswa' => ['required', Rule::in(['Beasiswa Akademik', 'Beasiswa Non Akademik'])],
                'berkas' => 'required|mimes:pdf,png,jpg,jpeg,zip|max:2048',
            ],
            [
                'nim.required' => 'NIM Anda wajib diisi.',
                'nim.unique' => 'NIM yang anda masukan sudah digunakan.',
                'semester.required' => 'Wajib Mengisi Semester',
                'semester.numeric' => 'Semester Wajib Berupa Angka',
                'beasiswa.required' => 'Wajib Mengisi Beasiswa',
                'beasiswa.in' => 'Beasiswa yang anda masukan tidak valid',
                'berkas.required' => 'Wajib Mengisi Berkas berupa (PDF/JPG/PNG/ZIP)',
                'berkas.mimes' => 'Berkas Yang anda masukan bukan berupa (PDF/JPG/PNG/ZIP).',
                'berkas.max' => 'Berkas tidak boleh lebih dari ukuran 2mb',
            ]
        );
        if ($request->file()) {
            $beasiswa->nim = $request->nim;
            $beasiswa->semester = $request->semester;
            $beasiswa->beasiswa = $request->beasiswa;
            $beasiswa->status_ajuan = "Belum di verifikasi";

            $file = $request->berkas;
            $namaFile = time() . '_' . $request->file('berkas')->getClientOriginalName();
            $namaFile = Str::kebab($namaFile);
            $file->move(public_path('uploads'), $namaFile);

            $beasiswa->berkas = $namaFile;

            $beasiswa->save();
        }
        return redirect()->route('beasiswa.show', ['beasiswa' => $beasiswa->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = DB::Table('mahasiswas')
            ->join('beasiswas', 'mahasiswas.nim', 'beasiswas.nim')
            ->select('mahasiswas.*', 'beasiswas.semester as semester', 'beasiswas.beasiswa as beasiswa', 'beasiswas.berkas as berkas', 'beasiswas.status_ajuan as status_ajuan')
            ->where('beasiswas.id', $id)
            ->first();
        if ($data) {
            return view('usermhs.show', compact('data'));
        }
        return abort(404);
    }

}
