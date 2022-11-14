@extends('layouts.app')

@section('content')
<div class="container mt-4 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="bi bi-person-add me-2"></i>{{ __('Menu Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- CUSTOM --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                    name="name" value="{{ old('name') }}" placeholder="Masukan nama lengkap..." required autocomplete="name" autofocus>
                                </div>

                                <div class="col-md-3">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelopes-bulk"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" placeholder="Masukan alamat email..." required autocomplete="email">
                                </div>
                            </div>

                            <div class="col-md-3">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" placeholder="Masukan kata sandi..." required autocomplete="new-password">
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Sandi') }}</label>

                            <div class="col-md-4 me-2">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" 
                                    name="password_confirmation" placeholder="Konfirmasi sandi..." required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-outline-secondary">
                                    <i class="bi bi-pencil-square me-1"></i> {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
