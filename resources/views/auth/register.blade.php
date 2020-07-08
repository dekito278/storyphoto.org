@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Register</h5>
                
                    <form  class="form-signin" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-label-group">
                            
                                <input placeholder="FullName" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            <label for="name">Full name</label>
                        </div>

                        <div class="form-label-group">

                            
                                <input placeholder="Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">Email Address</label>
                        </div>

                        <div class="form-label-group">
                            
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">Password</label>
                        </div>

                        <div class="form-label-group">
                            
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label for="password-confirm">Confirm password</label>
                        </div>

                        
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
