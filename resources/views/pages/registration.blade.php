@extends('layouts/backend')

@section('title', __('title.registration'))

@section('content')
<div class="container-fluid">

    <registration-component></registration-component>
    
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
		    url: "{{ route('registration.store') }}",
		    data: $('#registration').serialize(),
		    dataType: 'json',
		    success: function(json) {

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