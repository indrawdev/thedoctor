@extends('layouts/backend')

@section('title', __('title.letter'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-envelope-open-text fa-lg"></i>
                        @yield('title')
                    </h3>
                </div>
                <div class="card-body">

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