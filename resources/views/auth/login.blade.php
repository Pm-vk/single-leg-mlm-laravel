@extends('auth.header')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">User Login</h3>
                    <div class="card-body">
                        <!-- Demo Credentials Box -->
                        <div class="alert alert-info border-0 shadow-sm mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <strong class="text-primary">🔑 Demo Admin Credentials</strong>
                            </div>
                            <small class="d-block text-dark"><strong>Email:</strong> <code>admin@test.com</code></small>
                            <small class="d-block text-dark"><strong>Password:</strong> <code>password123</code></small>
                            <hr class="my-2">
                            <small class="text-muted d-block">
                                💡 <em>Unable to log in with these credentials?</em> You can instantly <a href="{{ route('register-user') }}" class="fw-bold text-primary">create a new account here</a> in seconds!
                            </small>
                        </div>

                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                        <a class="nav-link text-center mt-3" href="{{ route('register-user') }}">Don't Have An Account? Create an Account Now</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection