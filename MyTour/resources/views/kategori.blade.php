@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ (request()->is('publikasi')) ? 'active' : '' }}" href="{{ route('publikasi') }}"><strong><i class="fa-solid fa-cloud-arrow-up me-2"></i> Publikasi Artikel</strong></a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ (request()->is('kategori')) ? 'active' : '' }}" href="{{ route('kategori') }}"><strong><i class="bi bi-bookmark-star-fill me-2"></i> Kategori</strong></a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-outline-secondary" id="sidebarToggle"><i class="bi bi-menu-button"></i></button>
                    <strong>Kategori &nbsp; <i class="bi bi-bookmark-star-fill"></i></strong>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid"><br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-caret-right-fill me-1"></i> Umum
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body mt-1">
                                Menampilkan data artikel berdasarkan kategori: Umum
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-caret-right-fill me-1"></i> Khusus
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body mt-1">
                                Menampilkan data artikel berdasarkan kategori: Khusus
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection