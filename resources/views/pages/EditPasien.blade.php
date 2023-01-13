@extends('pages.template')

@section('content')

    <form action='{{ url('pasienupdate/'.$dataPasien->id) }}' method="post">
    @csrf 
    @method('PUT')
    <div class="row">
    <!-- ============================================================== -->
    <!-- validation form -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Input Data Pasien</h5>
            <div class="card-body">
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" value="{{ $dataPasien->nama }}" id="nama" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                            <label for="validationCustom03">Umur</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Masukan Umur" required value="{{ $dataPasien->umur }}">
                            <div class="invalid-feedback">
                                Please provide a valid age.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Gender</label>
                            <div class="col-sm-6">
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox">
                                        {{ $gender=$dataPasien->gender }}
                                        <input @if ($gender == "Laki-Laki") 
                                            checked
                                        @endif 
                                        type="checkbox" value="bar" id="e1" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2"class="custom-control-input"><span class="custom-control-label">Laki-Laki</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input @if ($gender == "Perempuan")
                                            checked
                                        @endif type="checkbox" value="bar" id="e2" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2" class="custom-control-input"><span class="custom-control-label">Perempuan</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">No Telp</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Nomor Telepon" value="{{ $dataPasien->no_telp }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Tanggal Perawatan</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Tanggal Perawatan" value="{{ $dataPasien->tgl_perawatan }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Keluhan</label>
                            <textarea required="" class="form-control">{{ $dataPasien->keluhan }} </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Tindakan</label>
                            <textarea required="" class="form-control">{{ $dataPasien->tindakan }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Status</label>
                            <div class="col-sm-6">
                                <div class="custom-controls-stacked">
                                    {{ $status = $dataPasien->status }}
                                    <label class="custom-control custom-checkbox">
                                        <input @if ($status == "Rawat Inap")
                                            checked
                                        @endif type="checkbox" value="bar" id="e1" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2" class="custom-control-input"><span class="custom-control-label">Rawat Inap</span>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input @if ($status == "Tidak Rawat Inap")
                                            checked
                                        @endif type="checkbox" value="bar" id="e2" data-parsley-multiple="group1" data-parsley-errors-container="#error-container2" class="custom-control-input"><span class="custom-control-label">Tidak Rawat Inap</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>                
                    <div class="form-group row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button name="submit" class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end validation form -->
    <!-- ============================================================== -->
    </form>

@endsection