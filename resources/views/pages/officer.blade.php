@extends('layouts/backend')

@section('title', 'Officer')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control form-control" type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input class="form-control form-control" type="text" placeholder="Contact">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control form-control" type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" placeholder="Address ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection