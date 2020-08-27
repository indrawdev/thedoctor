@extends('layouts/backend')

@section('title', __('title.identity'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-clinic-medical fa-lg"></i>
                        @yield('title')
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                    
                    </div>
                </div>
                <div class="card-footer">
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection