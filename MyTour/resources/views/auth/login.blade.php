@extends('layouts.app')

@section('content')
    <div class="container small-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><i class="fa-solid fa-door-open me-2"></i>{{ __('Menu Login') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>
    
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-envelopes-bulk"></i></span>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Masukan alamat email..." required autocomplete="email" autofocus>
                                    </div>
    
                                    <div class="col-md-3">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>
    
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                        name="password" required autocomplete="current-password" placeholder="Masukan kata sandi...">
                                    </div>
                                </div>
    
                                <div class="col-md-3">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat Akun') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-outline-secondary">
                                        <i class="fa-solid fa-file-circle-check me-2"></i>{{ __('Masuk') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password') }} <i class="bi bi-patch-question-fill"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection