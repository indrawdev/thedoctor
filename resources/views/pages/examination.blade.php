@extends('layouts/backend')

@section('title', __('title.examination'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                    <i class="fas fa-stethoscope fa-lg"></i>
                    @yield('title')
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#diagnosis" data-toggle="tab">Diagnosis</a></li>
                  <li class="nav-item"><a class="nav-link" href="#prescription" data-toggle="tab">Prescription</a></li>
                  <li class="nav-item"><a class="nav-link" href="#treatment" data-toggle="tab">Treatment</a></li>
                </ul>
                <div class="card-tools p-3">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="diagnosis">
                    <diagnosis-component></diagnosis-component>
                  </div>
                  <div class="tab-pane" id="prescription">
                    <prescription-component></prescription-component>
                  </div>
                  <div class="tab-pane" id="treatment">
                    <treatment-component></treatment-component>
                  </div>
                </div>
              </div><
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
$(document).ready(function() {
    //Button popover
    $('[data-toggle="popover"]').popover();
});
</script>
@endsection