@extends('layouts.home')
@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800 text-center">Hasil Pendaftaran Beasiswa</h1>
        <div class="card">
            <div class="card-body">
                <canvas id="chart" width="100" height="200"></canvas>
            </div>
        </div>
        <div class="card my-5">
            <div class="card-header">
                Tabel Hasil Pendaftaran Beasiswa IT Telkom Purwokerto
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Nama Mahasiswa</th>
                                <th>Email</th>
                                <th>No. HP</th>
                                <th>Semester</th>
                                <th>IPK</th>
                                <th>Jenis Beasiswa</th>
                                <th>Berkas</th>
                                <th>Status Ajuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                                @php $no = 1; @endphp
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->no_hp }}</td>
                                        <td>{{ $d->semester }}</td>
                                        <td>{{ $d->ipk }}</td>
                                        <td>{{ $d->beasiswa }}</td>
                                        <td><a href="{{ url('/uploads/') . '/' . $d->berkas }}" target="_BLANK"
                                                class="btn btn-sm btn-primary">Lihat</a></td>
                                        <td>{{ $d->status_ajuan }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9">Tidak ada data</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('chart').getContext('2d');

        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Beasiswa Akademik', 'Beasiswa Non Akademik'],
                datasets: [{
                    data: [{{$countAkademik}},{{$countNonAkademik}}],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
@endpush
