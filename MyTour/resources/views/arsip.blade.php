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
                <strong>Kelola Arsip &nbsp; <i class="fa-regular fa-folder-open"></i></strong>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid"><br>
            @if ($SuccessCreateArticle = Session::get('createArticle'))
                <div class="alert alert-success alert-dismissible fade show m-3 mt-3 md-3" role="alert">
                    <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i>
                        {{ $SuccessCreateArticle }}
                    </small>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div><br>
            @endif
            <table class="table table-hover table-borderless table-striped table-responsive">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col" class="col-2"><i class="fa-solid fa-arrow-up-1-9 me-1"></i>No</th>
                        {{-- <th scope="col"><i class="fa-solid fa-circle-question me-1"></i> Jenis Kategori</th> --}}
                        <th scope="col" class="col-6"><i class="bi bi-bookmarks-fill me-1"></i> Judul</th>
                        {{-- <th scope="col"><i class="bi bi-card-image me-1"></i> Foto Tour</th> --}}
                        {{-- <th scope="col"><i class="fa-regular fa-comment-dots me-1"></i>Komentar</th> --}}
                        <th scope="col" class="col-4"><i class="fa-solid fa-wrench me-1"></i>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach($data as $v)
                    <tr>
                        @if (Auth::user()->id == $v->user_id)
                            @if ($v->user_id != NULL)
                                <td scope="row">{{ $no++; }}</td>
                                {{-- <td>
                                    @if (($v->category_id) == '1')
                                        {{ "khusus" }}
                                    @elseif (($v->category_id) == '2')
                                        {{ "umum" }}
                                    @endif
                                </td> --}}
                                <td>{{ $v->title }}</td>
                                {{-- <td>
                                    <img src="{{ $v->image }}" alt="Logo" width="100" height="70" class="d-inline-block">
                                </td> --}}
                                {{-- <td>{{ $v->content }}</td>         --}}
                                <td>
                                    <a class="btn btn-outline-info btn-sm text-dark" data-bs-toggle="modal" data-bs-target="#ModalViewArticle-{{ $v->id }}">
                                        <i class="bi bi-eye me-1"></i> Lihat</a>
                                    <a class="btn btn-outline-warning btn-sm text-dark" data-bs-toggle="modal" data-bs-target="#ModalUpdateArticle-{{ $v->id }}">
                                        <i class="bi bi-pencil-square me-1"></i> Ubah</a>
                                    <a class="btn btn-outline-danger btn-sm text-dark" data-bs-toggle="modal" data-bs-target="#ModalDeleteArticle-{{ $v->id }}">
                                        <i class="bi bi-trash3 me-1"></i> Hapus</a>
                                </td>
                            @else
                            <td scope="row" colspan="5" style="text-align:center;" class="text-muted">
                                {{ "Data artikel belum ada (kosong)" }}<td>
                            @endif
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach($data as $v)
    <div class="modal fade modalmenu" id="#ModalViewArticle-{{ $v->id }}" tabindex="-1" aria-labelledby="ModalViewArticle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title"> Tampilan Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Test-{{ $v->id }}
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection