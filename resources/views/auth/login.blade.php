@extends('layouts.auth')

@section('content')
<body id="app" class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}">DokterPraktek</a>
        </div>
        <!-- /.login-logo -->
        <component-login></component-login>
    </div>
</body>
@endsection