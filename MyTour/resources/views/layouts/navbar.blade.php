        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container small-container">
                <a class="navbar-brand me-4" href="{{ url('/') }}">
                    <img src="{{ asset('favicon/favicon-32x32.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    <strong>{{ config('app.name', 'MyTour') }}</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                    @else
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item me-2">
                            <a class="nav-link" aria-current="page" href="#">
                                <i class="fa-solid fa-feather-pointed me-2"></i>Tulis Postingan</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link" aria-current="page" href="#">
                                <i class="fa-regular fa-comments me-2"></i>Interaksi</a>
                        </li>
                    </ul>
                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-2">
                                    <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fa-solid fa-door-open me-2"></i>{{ __('Masuk') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                    <i class="bi bi-person-add me-2"></i>{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" type="button" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }} <img src="{{ Auth::user()->image }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('edit_profile') }}">
                                        <i class="fa-regular fa-user me-2"></i>{{ __('Edit Profile') }}
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket me-2"></i>{{ __('Keluar') }}
                                    </a></li>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
