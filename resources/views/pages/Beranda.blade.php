@extends('pages.template')

@section('content')
 <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Selamat Datang</h2>
                            <p> Selamat datang di dashboard Sistem Informasi Klinik, Berikut beberapa data yang baru-baru ini diimputkan</p>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
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
                                <th>No Telepon</th>
                                <th>Tanggal Perawatan</th>
                                <th>Keluhan</th>
                                <th>Tindakan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama 1</td>
                                <td>30</td>
                                <td>0895380035206</td>
                                <td>13 Januari 2022</td>
                                <td>Magh</td>
                                <td>Pemerikasaan general dokter, dan penanganan dengan pemberian obat pereda nyeri</td>
                                <td>Tidak rawat inap</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>No Telepon</th>
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
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>
<div class="row">
    <!-- ============================================================== -->
    <!-- data table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Data Pembaruan Tenaga Medis Terbaru</h5>
                <p>Data ini merupakan data tenaga medis yang baru-baru ini ditambahkan</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>JK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20104056</td>
                                <td>Farhan Ardiyanto W</td>
                                <td>21</td>
                                <td>20104056@ittelkom-pwt.ac.id</td>
                                <td>0895380035206</td>
                                <td>Laki-Laki</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>JK</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end data table  -->
    <!-- ============================================================== -->
</div>
{{--
@foreach ($Mahasiswa as $val)
{{$val}} <br>
@endforeach
--}}
@endsection