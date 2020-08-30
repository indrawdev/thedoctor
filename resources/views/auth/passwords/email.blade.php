@extends('layouts.auth')

@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">DokterPraktek</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Request new password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}" class="text-success">Login</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center text-success">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</body>
@endsection

@section('page-script')
<script>
$(document).ready(function() {
    $('#forgot').click(function () {
        event.preventDefault();
        $.ajax({
		    type: 'POST',
		    url: '',
		    data: $('#forgotform').serialize(),
		    dataType: 'json',
		    success: function(json) {

            },
            error: function() {
            
            }
        });
    });
});
</script>
@endsection