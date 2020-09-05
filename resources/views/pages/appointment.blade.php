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
                        <button type="button" class="btn btn-xs btn-outline-success" data-toggle="popover" data-content="{{ __('popover.appointment') }}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg>
                        </button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
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
                    <button id="save" type="button" class="btn btn-success">@lang('button.save')</button>
                    <button type="button" class="btn btn-default float-right">@lang('button.cancel')</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        Data
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3" class="text-center">No Data</td>
                            </tr>
                        </tbody>
                    </table>
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
$(document).ready(function() {
    $('#save').click(function () {
        event.preventDefault();
        $.ajax({
		    type: 'POST',
		    url: "{{ route('appointment.store') }}",
		    data: $('#appointment').serialize(),
		    dataType: 'json',
		    success: function(json) {

            },
            error: function() {
            
            }
        });
    });
    
    //Button popover
    $('[data-toggle="popover"]').popover();

    function save() {
        $.ajax({
		    type: 'POST',
		    url: "{{ route('appointment.store') }}",
		    data: $('#appointment').serialize(),
		    dataType: 'json',
		    success: function(json) {

            },
            error: function() {
            
            }
        });
    }
});
</script>
@endsection