@extends('layouts/backend')

@section('title', __('title.examination'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                    <i class="fas fa-envelope-open-text fa-lg"></i>
                    @yield('title')
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Diagnosa</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Resep</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tindakan</a></li>
                </ul>
                <div class="card-tools p-3">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
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
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    The European languages are members of the same family. Their separate existence is a myth.
                    For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                    in their grammar, their pronunciation and their most common words. Everyone realizes why a
                    new common language would be desirable: one could refuse to pay expensive translators. To
                    achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                    words. If several languages coalesce, the grammar of the resulting language is more simple
                    and regular than that of the individual languages.
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
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
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#save').click(function () {
        event.preventDefault();
        $.ajax({
		    type: 'POST',
		    url: "{{ route('examination.store') }}",
		    data: $("#examination").serialize(),
		    dataType: 'json',
		    success: function(json) {
                console.log('OK');
            },
            error: function() {
            
            }
        });
    });

    //Button popover
    $('[data-toggle="popover"]').popover();

});
</script>
@endsection