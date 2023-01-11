@extends('pages.template')

@section('content')

<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Data Pembaruan Input Pasien</h5>
                <p>Data pasien yang baru saja ditangani</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Gender</th>
                                <th>No Telp</th>
                                <th>Tanggal Perawatan</th>
                                <th>Keluhan</th>
                                <th>Tindakan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i =$dataPasien ->firstItem() ?>
                        @foreach ($dataPasien as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->tgl_perawatan }}</td>
                                <td>{{ $item->keluhan }}</td>
                                <td>{{ $item->tindakan }}</td>
                                <td>{{ $item->status }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Gender</th>
                                <th>No Telp</th>
                                <th>Tanggal Perawatan</th>
                                <th>Keluhan</th>
                                <th>Tindakan</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <form action='{{ url('pasienupdate/'.$dataPasien->id) }}' method='post'>
        @csrf 
        @method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('pasienupdate') }}' class="btn btn-secondary"><< kembali</a>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">nama</label>
        <div class="col-sm-10">
            {{ $dataPasien->nama }}
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama' value="{{ $dataPasien->nama }}" id="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='jurusan' value="{{ $dataPasien->jurusan }}" id="jurusan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->

@endsection