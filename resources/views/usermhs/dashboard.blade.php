@extends('layouts.home')
@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        {{-- <div class="row"> --}}
            <!-- Illustrations -->
            <div class="col-lg-6 mb-4">
                {{-- <div class="card shadow mb-4"> --}}
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-purple text-center">Syarat &amp; Ketentuan Beasiswa NON - Akademik</h6>
                    </div>
                    <div class="card-body">

                        <li>Sehat jasmani</li>
                        <li>Mahasiswa Aktif ITTP</li>
                        <li>IPK Terakhir: Minimal 3.0</li>
                        <li>Semester 1-8</li>
                        <li>Aktif dalam kegiatan ekstrakurikuler, kepemimpinan, keterlibatan dalam kegiatan sosial yang diselenggarakan Program Studi/Fakultas/Institut</li>
                        <li>Pernah Mengikuti Kejuaraan Non Akademik</li>
                        <li>Bersedia mengikuti seleksi teknis yang diselenggarakan oleh kemahasiswaan</li>
                        <li>Bersedia menandatangani kontrak beasiswa dengan pihak Kemahasiswaaan didampingi orang tua/wali.</li>
                        
                        <div class="mt-4 ">
                            <a href="{{ route('beasiswa.create') }}?jenis=nonakademik" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
            <!-- Illustrations -->
            <div class="col-lg-6 mb-4">
                {{-- <div class="card shadow mb-4"> --}}
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-purple text-center">Syarat &amp; Ketentuan Beasiswa Akademik</h6>
                    </div>
                    <div class="card-body">

                        <li>Sehat jasmani</li>
                        <li>Mahasiswa Aktif ITTP</li>
                        <li>IPK Terakhir: Minimal 3.0</li>
                        <li>Semester 1-8</li>
                        <li>Tidak berstatus sebagai penerima beasiswa</li>
                        <li>Aktif di Ormawa, UKM, dan Asisten Labolatorium/Student Staff</li>
                        <li>Memiliki prestasi lomba/kejuaraan/sertifikat seminar/pelatihan yang diperoleh selama periode Maret s.d. Desember 2023</li>
                        <div class="mt-4 ">
                            <a href="{{ route('beasiswa.create') }}?jenis=akademik" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        {{-- </div> --}}
    </div>
@endsection
