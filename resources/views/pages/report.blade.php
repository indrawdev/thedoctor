@extends('layouts/backend')

@section('title', __('title.report'))

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