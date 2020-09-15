<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    
    @include('panels/styles')

</head>
<body class="accent-success sidebar-mini layout-fixed">
    <div id="app" class="wrapper">
        @include('panels/navbar')

        @include('panels/sidebar')
    
    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('panels/header')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
        </div>

        @include('panels/footer')

    </div>
</body>

@include('panels/scripts')

</html>