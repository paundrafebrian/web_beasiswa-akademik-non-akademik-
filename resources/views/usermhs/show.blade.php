@extends('layouts.home')
@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Daftar Beasiswa</h1>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Pendaftaran Berhasil!</h4>
            <hr>
            <p>Status ajuan anda: Belum diverifikasi.</p>
        </div>
        <form>
            <div class="card">
                <div class="card-header">
                    Registrasi Beasiswa
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Masukan NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $data->nim }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $data->nama }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="{{ $data->email }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ $data->no_hp }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="semester" class="col-sm-2 col-form-label">Semester saat ini</label>
                        <div class="col-sm-10">
                            <select name="semester" class="form-control" id="semester" disabled>
                                <option value="1" @if ($data->semester == '1') selected @endif>Semester 1</option>
                                <option value="2" @if ($data->semester == '2') selected @endif>Semester 2</option>
                                <option value="3" @if ($data->semester == '3') selected @endif>Semester 3</option>
                                <option value="4" @if ($data->semester == '4') selected @endif>Semester 4</option>
                                <option value="5" @if ($data->semester == '5') selected @endif>Semester 5</option>
                                <option value="6" @if ($data->semester == '6') selected @endif>Semester 6</option>
                                <option value="7" @if ($data->semester == '7') selected @endif>Semester 7</option>
                                <option value="8" @if ($data->semester == '8') selected @endif>Semester 8</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ipk" class="col-sm-2 col-form-label">IPK Terakhir</label>
                        <div class="col-sm-10">
                            <input type="number" step="0.01" class="form-control" value="{{ $data->ipk }}" disabled>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="beasiswa" class="col-sm-2 col-form-label">Pilih Beasiswa</label>
                        <div class="col-sm-10">
                            <select name="beasiswa" class="form-control" id="beasiswa" disabled>
                                <option value="Beasiswa Akademik" @if ($data->beasiswa == 'Beasiswa Akademik') selected @endif>Beasiswa
                                    Akademik</option>
                                <option value="Beasiswa Non Akademik" @if ($data->beasiswa == 'Beasiswa Non Akademik') selected @endif>
                                    Beasiswa
                                    Non Akademik</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="berkas" class="col-sm-2 col-form-label">Upload Berkas Syarat</label>
                        <div class="col-sm-10">
                            <a href="{{ url('/uploads' . '/' . $data->berkas) }}" target="_BLANK">{{ $data->berkas }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
@endsection
