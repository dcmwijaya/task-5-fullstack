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
                <div class="row row-cols-1 row-cols-md-3 g-4 pb-4 mb-4">
                    @foreach($data as $v)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ $v->image }}" class="card-img-top" alt="gambar_konten" style="height:150px;">
                                <div class="card-header">
                                    <p class="card-title"><strong>{{ $v->title }}</strong></p>
                                </div>
                                <div class="card-body" style="max-height: 1000px;">
                                    <small class="card-text">{{ $v->content }}</small>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <strong><i class="bi bi-person-square me-1"></i>
                                        Penulis:</strong> &nbsp; 
                                        @if($v->user_id == '1'){{ "Anastasya Geraldine" }}
                                        @elseif($v->user_id == '2'){{ "Andikha Refanza" }}
                                        @elseif($v->user_id == '3'){{ "Alfiansyah Nukita Prada" }}
                                        @else {{ "Tidak Diketahui" }}
                                        @endif
                                    </small><br>
                                    <small class="text-muted"><strong><i class="bi bi-calendar-range-fill me-1"></i>
                                        Waktu:</strong> &nbsp; {{ $v->updated_at }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $data->links() }}
                <div class="row row-cols-1 row-cols-md-3 mt-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <strong><i class="bi bi-info-square-fill me-2"></i>Informasi Tambahan</strong>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <small class="text-muted">
                                        Halaman: {{ $data->currentPage() }}<br>
                                        Jumlah Data: {{ $data->total() }}<br>
                                        Data Per Halaman: {{ $data->perPage() }}
                                    </small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection