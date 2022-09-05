@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h1 class="h3 mb-3 font-weight-normal text-center">Registration Form</h1>
            <form class="form-registration" action="{{ route('store-register') }}" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" id="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                        name="name" placeholder="Name" value="{{ old('name') }}"required autofocus>
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                        name="username" placeholder="Username" value="{{ old('username') }}"required>
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" placeholder="name@example.com" value="{{ old('email') }}"required>
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
            <small class="d-block text-center mt-3">Already registered? <a href="{{ route('login') }}">Login
                    Now!</a></small>
        </div>
    </div>
@endsection
