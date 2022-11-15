@extends('layouts.app')

@section('content')
    <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ (request()->is('artikel')) ? 'active' : '' }}" href="{{ route('artikel') }}"><strong><i class="fa-solid fa-file-pen me-2"></i> Tulis Artikel</strong></a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 {{ (request()->is('arsip')) ? 'active' : '' }}" href="{{ route('arsip') }}"><strong><i class="fa-regular fa-folder-open me-2"></i> Kelola Arsip</strong></a>
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-outline-secondary" id="sidebarToggle"><i class="bi bi-menu-button"></i></button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <strong>Tulis Artikel &nbsp; <i class="fa-solid fa-file-pen"></i></strong>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid"><br>
            <form class="row g-2" action="{{ url('/create_article') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card mb-3" style="max-width: 1920px;">
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-md-6 p-2">
                                <div class="col-md-12 mt-2">
                                    <label for="judulpostingform" class="col-form-label"><i class="bi bi-bookmarks-fill me-1"></i>{{ __('Judul Postingan') }}</label>
                                    <input type="text" class="form-control mt-2" name="title" id="judulpostingform" placeholder="Tulis Judul..." required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label for="categoryform" class="col-form-label"><i class="fa-solid fa-circle-question me-1"></i>{{ __('Jenis Posting') }}</label>
                                    <select id="categoryform" name="category_id" class="form-select g-3 mb-3 mt-2" aria-label=".form-select-lg example">
                                        <option value="2" class="text-small" selected>Umum</option>
                                        <option value="1" class="text-small">Khusus</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label for="imgpostingform" class="col-form-label"><i class="bi bi-card-image me-1"></i>{{ __('Pilih Foto Tour') }}</label>
                                    <div class="input-group mb-3 mt-2">
                                        <input type="file" class="form-control" name="image" id="imgpostingform" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="col-md-12 mt-2">
                                    <label for="contentform" class="col-form-label"><i class="fa-regular fa-comment-dots me-1"></i>{{ __('Komentar Anda') }}</label>
                                    <textarea type="text" class="form-control mt-2" name="content" id="contentform" cols="30" rows="10" placeholder="Tulis Komentar..." required></textarea>
                                </div>
                            </div>
                        </div><hr>
                        <button type="submit" class="btn btn-secondary mt-2 mb-3"><i class="bi bi-send-check-fill me-1"></i> Publikasikan</button>   
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection