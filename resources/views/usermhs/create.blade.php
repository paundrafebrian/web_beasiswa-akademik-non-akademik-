@extends('layouts.home')
@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-4 text-gray-800">Daftar Beasiswa</h1> --}}
        <!-- Menambahkan logika untuk menampilkan teks tambahan -->
        @if (isset($_GET['jenis']) && $_GET['jenis'] === 'akademik')
            <h1 class="h3 mb-4 text-gray-800 text-center">Daftar Beasiswa Akademik</h1>
        @elseif(isset($_GET['jenis']) && $_GET['jenis'] === 'nonakademik')
            <h1 class="h3 mb-4 text-gray-800 text-center">Daftar Beasiswa Non Akademik</h1>
        @elseif(isset($_GET['jenis']) || empty($_GET['jenis']))
            <h1 class="h3 mb-4 text-gray-800 text-center">Daftar Beasiswa </h1>
        @endif

        <div class=" mb-4">

            <form method="POST" enctype="multipart/form-data" action="{{ route('beasiswa.store') }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-2 col-form-label">Masukan NIM</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM"
                                    value="{{ old('nim') }}" required>
                                @error('nim')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                                    value="{{ old('nama') }}" readonly>
                                @error('nama')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    value="{{ old('email') }}" readonly>
                                @error('email')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="no_hp" name="nomor_hp"
                                    placeholder="Nomor HP" value="{{ old('nomor_hp') }}" readonly>
                                @error('no_hp')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="semester" class="col-sm-2 col-form-label">Semester saat ini</label>
                            <div class="col-sm-10">
                                <select name="semester" class="form-control" id="semester" disabled required>
                                    <option value="" selected disabled>Pilih semester</option>
                                    <option value="1" @if (old('semester') == '1') selected @endif>Semester 1
                                    </option>
                                    <option value="2" @if (old('semester') == '2') selected @endif>Semester 2
                                    </option>
                                    <option value="3" @if (old('semester') == '3') selected @endif>Semester 3
                                    </option>
                                    <option value="4" @if (old('semester') == '4') selected @endif>Semester 4
                                    </option>
                                    <option value="5" @if (old('semester') == '5') selected @endif>Semester 5
                                    </option>
                                    <option value="6" @if (old('semester') == '6') selected @endif>Semester 6
                                    </option>
                                    <option value="7" @if (old('semester') == '7') selected @endif>Semester 7
                                    </option>
                                    <option value="8" @if (old('semester') == '8') selected @endif>Semester 8
                                    </option>
                                </select>
                                @error('semester')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ipk" class="col-sm-2 col-form-label">IPK Terakhir</label>
                            <div class="col-sm-10">
                                <input type="number" step="0.01" class="form-control" id="ipk" name="ipk"
                                    placeholder="IPK Terakhir" value="{{ old('ipk') }}" readonly required>
                                @error('ipk')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="beasiswa" class="col-sm-2 col-form-label">Pilih Beasiswa</label>
                            <div class="col-sm-10">
                                <select name="beasiswa" class="form-control" id="beasiswa" disabled required>
                                    <option value="" selected disabled>Pilihan Beasiswa</option>
                                    <option value="Beasiswa Akademik" @if (old('beasiswa') == 'Beasiswa Akademik' || (isset($_GET['jenis']) && $_GET['jenis'] === 'akademik')) selected @endif>
                                        Beasiswa Akademik</option>
                                    <option value="Beasiswa Non Akademik"
                                        @if (old('beasiswa') == 'Beasiswa Non Akademik' || (isset($_GET['jenis']) && $_GET['jenis'] === 'nonakademik')) selected @endif>
                                        Beasiswa Non Akademik</option>
                                </select>
                                @error('beasiswa')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="berkas" class="col-sm-2 col-form-label">Upload Berkas Syarat</label>
                            <div class="col-sm-10">
                                <input name="berkas" accept=".pdf, .jpg, .jpeg, .zip, .png" class="form-control"
                                    id="berkas" type="file" disabled required>
                                @error('berkas')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="my-3 text-center align-content-center">
                            <a href="" class="btn btn-danger btn-md text-center">Batal</a>
                            <input type="submit" value="Daftar" id="submit"
                                class="btn btn-submit btn-md text-center" disabled />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#nim').on('blur', function() {
                var nim = $(this).val();

                if (nim) {
                    $.ajax({
                        url: '{{ url('/') }}/get-mhs/' + nim,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            if (data && data.mahasiswa) {
                                $('#nama').val(data.mahasiswa.nama);
                                $('#email').val(data.mahasiswa.email);
                                $('#no_hp').val(data.mahasiswa.no_hp);
                                $('#ipk').val(data.mahasiswa.ipk);
                                if ($('#ipk').val() >= 3.0) {
                                    $('#semester').attr('disabled', false);
                                    $('#beasiswa').attr('disabled', false);
                                    $('#berkas').attr('disabled', false);
                                    $('#submit').attr('disabled', false);
                                } else {
                                    $('#semester').val('');
                                    $('#semester').attr('disabled', true);
                                    $('#beasiswa').val('');
                                    $('#beasiswa').attr('disabled', true);
                                    $('#berkas').attr('disabled', true);
                                    $('#submit').attr('disabled', true);
                                }
                            } else {
                                $('#nama').val('');
                                $('#email').val('');
                                $('#no_hp').val('');
                                $('#ipk').val('');
                                $('#semester').val('');
                                $('#semester').attr('disabled', true);
                                $('#beasiswa').val('');
                                $('#beasiswa').attr('disabled', true);
                                $('#berkas').val('');
                                $('#berkas').attr('disabled', true);
                                $('#submit').attr('disabled', true);
                            }
                        }
                    });
                } else {
                    $('#nama').val('');
                    $('#email').val('');
                    $('#no_hp').val('');
                    $('#ipk').val('');
                    $('#semester').val('');
                    $('#semester').attr('disabled', true);
                    $('#beasiswa').val('');
                    $('#beasiswa').attr('disabled', true);
                    $('#berkas').val('');
                    $('#berkas').attr('disabled', true);
                    $('#submit').attr('disabled', true);
                }
            });
        });
    </script>
@endpush
