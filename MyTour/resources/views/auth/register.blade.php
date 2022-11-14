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
                        <div class="row col-md-12">
                            <div class="col-md-4 mt-2">
                                <label for="name" class="col-md-12 col-form-label">{{ __('Nama Lengkap') }}</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                    name="name" value="{{ old('name') }}" placeholder="Masukan nama lengkap..." required autocomplete="name" autofocus>
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="email" class="col-md-12 col-form-label">{{ __('Alamat Email') }}</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelopes-bulk"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" placeholder="Isi alamat email..." required autocomplete="email">
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="tinggal" class="col-md-12 col-form-label">{{ __('Tempat Tinggal') }}</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                    <input id="tinggal" type="text" class="form-control @error('tinggal') is-invalid @enderror" 
                                    name="tinggal" value="{{ old('tinggal') }}" placeholder="Isi nama lengkap..." required autocomplete="tinggal" autofocus>
                                </div>

                                @error('tinggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row col-md-12">
                            <div class="col-md-4 mt-2">
                                <label for="pekerjaan" class="col-md-12 col-form-label">{{ __('Pekerjaan') }}</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelopes-bulk"></i></span>
                                    <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" 
                                    name="pekerjaan" value="{{ old('pekerjaan') }}" placeholder="Isi pekerjaan..." required autocomplete="pekerjaan">
                                </div>

                                @error('pekerjaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="password" class="col-md-12 col-form-label">{{ __('Kata Sandi') }}</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" placeholder="Isi kata sandi..." required autocomplete="new-password">
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Konfirmasi Sandi') }}</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" 
                                    name="password_confirmation" placeholder="Konfirmasi sandi..." required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="row col-md-12 mt-2">
                            <label for="jenis_kelamin" class="col-md-12 col-form-label">{{ __('Jenis Kelamin') }}</label>
                            <div class="col-md-10 mt-2">
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-select g-3 mb-3" aria-label=".form-select-lg example">
                                    <option value="L" class="text-small" selected>Laki-Laki (L)</option>
                                    <option value="P" class="text-small">Perempuan (P)</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-2">
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
