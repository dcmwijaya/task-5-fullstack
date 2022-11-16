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
                    <strong>Publikasi Artikel &nbsp; <i class="fa-solid fa-cloud-arrow-up"></i></strong>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid"><br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($data as $v)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ $v->image }}" class="card-img-top" alt="gambar_konten" style="max-height: 200px;">
                                <div class="card-header">
                                    <h5 class="card-title"><i class="fa-solid fa-ship me-1"></i>{{ $v->title }}</h5>
                                </div>
                                <div class="card-body" style="max-height: 1000px;">
                                    <p class="card-text">{{ $v->content }}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <strong><i class="bi bi-person-square me-1"></i>
                                        Penulis:</strong> &nbsp; 
                                        @if($v->user_id == '1'){{ "Anastasya Geraldine" }}
                                        @elseif($v->user_id == '2'){{ "Andikha Refanza" }}
                                        @elseif($v->user_id == '3'){{ "Alfiansyah Nukita Prada" }}
                                        @endif
                                    </small><br>
                                    <small class="text-muted"><strong><i class="bi bi-calendar-range-fill me-1"></i>
                                        Dibuat/Diperbarui:</strong> &nbsp; {{ $v->updated_at }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div><br><br>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection