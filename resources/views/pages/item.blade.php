@extends('layouts/backend')

@section('title', __('title.item'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-boxes fa-lg"></i>
                        @yield('title')
                        <button type="button" class="btn btn-xs btn-outline-success" data-toggle="popover" data-content="{{ __('popover.registration') }}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg>
                        </button>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg" data-backdrop="static" data-keyboard="false">
                        Add Item
                        </button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Form Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Unit</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Distributor</label>
                            <select class="form-control">
                                <option>D 1</option>
                                <option>D 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" type="text" placeholder="Price">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('button.close')</button>
                <button type="button" class="btn btn-success">@lang('button.save')</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('page-script')
<script>
  $(function () {
    //Button popover
    $('[data-toggle="popover"]').popover();
  });
</script>
@endsection