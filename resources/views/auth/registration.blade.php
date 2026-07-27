@extends('auth.header')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">User Registeration </h3>
                    <div class="card-body">

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label text-muted small fw-bold">Full Name</label>
                                <input type="text" placeholder="John Doe" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger small">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="email_address" class="form-label text-muted small fw-bold">Email Address</label>
                                <input type="email" placeholder="john@example.com" id="email_address" class="form-control"
                                    name="email" required>
                                @if ($errors->has('email'))
                                <span class="text-danger small">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="mobile" class="form-label text-muted small fw-bold">Mobile Number (10 digits)</label>
                                <input type="text" placeholder="9876543210" id="mobile" class="form-control" name="mobile"
                                    value="9876543210" required>
                                @if ($errors->has('mobile'))
                                <span class="text-danger small">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label text-muted small fw-bold">Password</label>
                                <input type="password" placeholder="••••••••" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger small">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <!-- Auto-generated & Preset MLM Fields -->
                            <input type="hidden" name="referralkey" value="{{ mt_rand(100000, 999999) }}">
                            <input type="hidden" name="sponserid" value="{{ \App\Models\User::first()->referralkey ?? '473753' }}">
                            <input type="hidden" name="amount" value="2000">
                            <input type="hidden" name="epin" value="{{ mt_rand(1000000000, 9999999999) }}">

                            <div class="d-grid mx-auto mt-4">
                                <button type="submit" class="btn btn-primary btn-block py-2 fw-bold">Create Account</button>
                            </div>
                        </form>


                        <a class="nav-link" href="{{ route('login') }}">Have an Account ? Login now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection