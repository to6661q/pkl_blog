@extends('layouts.app')

@section('content')

<div class="card"><br>
    <form method="POST" action="{{ route('login') }}">
        <h4>Masuk Admin</h4>
        
        @csrf

        <div class="row mb-3">
            <label for="email">{{ __('Email :') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
        </div>
        <br>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password :') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                    name="password" required autocomplete="current-password">
                        
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
        
                </div>
        </div>
        <br>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Lupa password ?') }}</a>
                    @endif
        
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>                
                        <label class="form-check-label" for="remember">
                            {{ __('Ingat saya') }}
                        </label>  
                
                </div>
            </div>
        </div>
        <br>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn" style="color:#134281">{{ __('Masuk Dashboard Admin') }}</button>
                                
                  
            </div>
        </div>
        <br>
            
    </form>
</div>
         
@endsection