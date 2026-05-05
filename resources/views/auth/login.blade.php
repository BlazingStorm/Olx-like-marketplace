@extends('layouts.app')

@section('content')
   <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">

            <div class="card shadow-sm border-0 rounded-4">
                
                
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h5 class="mb-0 ">Welcome Back!!</h5>
                    <small >Login to continue</small>
                </div>

                <div class="card-body p-5">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="matt@example.com"
                                       required autofocus>
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password"
                                       name="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="*****"
                                       required>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>

                            
                        </div>

                        
                        <button type="submit"
                                class="btn btn-primary w-100 rounded-pill py-2">
                            Login
                        </button>

                    </form>

                </div>

                
                <div class="card-footer text-center bg-light ">
                    <small>
                        Don’t have an account?
                        <a href="{{ route('register') }}" class="text-primary">
                            Register
                        </a>
                    </small>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
