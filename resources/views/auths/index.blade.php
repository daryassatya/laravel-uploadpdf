@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form class="form-signin" action="{{ route('login') }}" method="post">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
                <div class="form-floating">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" id="password"
                        class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password"
                        placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="{{ route('register') }}">Register
                    Now!</a></small>
        </div>
    </div>
@endsection
