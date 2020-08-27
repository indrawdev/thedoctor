@extends('layouts/backend')

@section('title', __('title.appointment'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-calendar-alt fa-lg"></i>
                        @yield('title')
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Pemeriksaan</label>
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
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label>Tanggal lahir</label>
                                        <input class="form-control" id="dob" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Umur</label>
                                        <input class="form-control" type="text" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
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
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success">@lang('button.save')</button>
                    <button type="button" class="btn btn-default float-right">@lang('button.cancel')</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('vendor-style')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
@endsection

@section('vendor-script')
<!-- date-range-picker -->
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
@endsection

@section('page-script')
<script>
  $(function () {
    //Date range picker
    $('#dob').datetimepicker({
        format: 'L'
    });
  });
</script>
@endsection