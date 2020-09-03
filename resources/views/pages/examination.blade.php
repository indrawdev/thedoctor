@extends('layouts/backend')

@section('title', __('title.examination'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true"><i class="fas fa-stethoscope fa-lg"></i> Diagnosa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false"><i class="fas fa-stethoscope fa-lg"></i> Resep</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false"><i class="fas fa-stethoscope fa-lg"></i> Tindakan</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Kartu</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pasien</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Umur</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>No. Register</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label>Anamnesa</label>
                                                <textarea class="form-control" rows="3" placeholder="Anamnesa ..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Tinggi Badan</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Berat Badan</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Suhu Badan</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Tekanan Darah</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label>Diagnosa Pertama</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ICD</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label>Diagnosa Kedua</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ICD</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success float-right">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table mt-3">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Diagnosa 1</th>
                                                        <th>Diagnosa 2</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>12/12/12</td>
                                                        <td>12/12/12</td>
                                                        <td>12/12/12</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="row">
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Kartu</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pasien</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Umur</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Tindakan</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Biaya</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Total</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success float-right">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Tindakan</th>
                                                        <th>Biaya</th>
                                                        <th>Jml</th>
                                                        <th>Total</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>INJEKSI</td>
                                                        <td>25.000</td>
                                                        <td>2</td>
                                                        <td>50.000</td>
                                                        <td>YES</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="5" class="text-right">50.000</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
  $(function () {
    //Button popover
    $('[data-toggle="popover"]').popover();
  });
</script>
@endsection