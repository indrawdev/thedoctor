@extends('layouts/backend')

@section('title', __('title.unit'))

@section('content')

@endsection

@section('page-script')
<script>
  $(function () {
    //Button popover
    $('[data-toggle="popover"]').popover();
  });
</script>
@endsection