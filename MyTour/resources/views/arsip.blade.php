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
            @if ($SuccessUpdateArticle = Session::get('updateArticle'))
                <div class="alert alert-success alert-dismissible fade show m-3 mt-3 md-3" role="alert">
                    <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i>
                        {{ $SuccessUpdateArticle }}
                    </small>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div><br>
            @endif
            @if ($SuccessDeleteArticle = Session::get('deleteArticle'))
                <div class="alert alert-success alert-dismissible fade show m-3 mt-3 md-3" role="alert">
                    <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i>
                        {{ $SuccessDeleteArticle }}
                    </small>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div><br>
            @endif
            <table class="table table-hover table-borderless table-striped table-responsive">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col" class="col-2"><i class="fa-solid fa-arrow-up-1-9 me-1"></i>No</th>
                        <th scope="col" class="col-6"><i class="fa-solid fa-ship me-1"></i> Judul</th>
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
                                <td>{{ $v->title }}</td>
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
<div class="modal fade modalmenu" id="ModalViewArticle-{{ $v->id }}" tabindex="-1" aria-labelledby="ModalViewArticleLabel" aria-hidden="true">
    <div class="modal-dialog" style="min-width:1000px;min-height:500px;align-items:center;margin-top:100px;">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-light">
                <strong><p class="modal-title" id="ModalViewArticleLabel"><label for="judulpostingform" class="col-form-label">
                    <i class="fa-solid fa-ship me-1"></i>
                    {{ $v->title }} @if (($v->category_id) == '1') {{ "(Kategori: Khusus)" }} @elseif (($v->category_id) == '2') {{ "(Kategori: Umum)" }} @endif
                </label></p></strong>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"><br>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ $v->image }}" class="img-fluid rounded-start img-profile" alt="gambartour" style="height:240px;max-height:auto;width:450px;max-width:auto;">
                    </div>
                    <div class="col-md-6 pb-3">
                        <label for="contentform" class="col-form-label"><i class="fa-regular fa-comment-dots me-1"></i>{{ __('Komentar Anda') }}</label>
                        <textarea type="text" class="form-control" id="contentform" rows="8" cols="66" style="text-align:justify;white-space:normal;" readonly disabled>
                            {{ $v->content }}
                        </textarea>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>

<div class="modal fade modalmenu" id="ModalUpdateArticle-{{ $v->id }}" tabindex="-1" aria-labelledby="ModalUpdateArticleLabel" aria-hidden="true">
        <div class="modal-dialog" style="min-width:1000px;min-height:500px;align-items:center;">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-light">
                    <strong><p class="modal-title" id="ModalUpdateArticleLabel">
                        <i class="fa-solid fa-book-open-reader me-1"></i> Ubah Artikel
                    </p></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2" action="{{ url('updatearticle/'.$v->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row col-md-12">
                            <div class="col-md-6 mt-2">
                                <label for="imgpostingform" class="col-form-label"><i class="bi bi-card-image me-1"></i>{{ __('Foto Tour Lama') }}</label>
                                <img src="{{ $v->image }}" class="img-fluid rounded-start img-profile" alt="gambartour" style="height:240px;max-height:auto;width:450px;max-width:auto;">
                                <label for="imgpostingform" class="col-form-label mt-2"><i class="bi bi-card-image me-1"></i>{{ __('Ubah Foto Tour Baru') }}</label>
                                <div class="input-group mb-3 mt-2">
                                    <input type="file" class="form-control" name="image" id="imgpostingform" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="col-md-12 mt-2">
                                    <label for="judulpostingform" class="col-form-label"><i class="fa-solid fa-ship me-1"></i>{{ __('Ubah Judul Postingan') }}</label>
                                    <input type="text" class="form-control mt-2" name="title" id="judulpostingform" value="{{ $v->title }}" placeholder="Ubah Judul..." required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="categoryform" class="col-form-label"><i class="fa-solid fa-circle-question me-1"></i>{{ __('Ubah Jenis Posting') }}</label>
                                    <select id="categoryform" name="category_id" class="form-select g-3 mb-3 mt-2" aria-label=".form-select-lg example">
                                        <option value="2" class="text-small" selected>Umum</option>
                                        <option value="1" class="text-small">Khusus</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="contentform" class="col-form-label"><i class="fa-regular fa-comment-dots me-1"></i>{{ __('Ubah Komentar Anda') }}</label>
                                    <textarea type="text" class="form-control mt-2" name="content" id="contentform" cols="30" rows="5" style="text-align:justify;white-space:normal;" placeholder="Ubah Komentar..." required>{{ $v->content }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer bg-secondary mt-2">
                            <a type="button" class="btn btn-danger btn-sm btncancel text-light" data-bs-dismiss="modal">
                            <i class="bi bi-person-x me-1"></i> Batal</a>
                            <button type="submit" class="btn btn-primary btn-sm btnacc text-light">
                            <i class="bi bi-person-check me-1"></i> Setuju</button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>

<div class="modal fade modalmenu" id="ModalDeleteArticle-{{ $v->id }}" tabindex="-1" aria-labelledby="ModalDeleteArticleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-light">
                <strong><p class="modal-title" id="ModalDeleteArticleLabel"><i class="bi bi-trash3 me-1"></i> Hapus Artikel</p></strong>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <small class="text-muted">Anda yakin ingin menghapus artikel yang berjudul <strong>"{{ $v->title }}"</strong> ini ?</small>
            </div>
            <div class="modal-footer bg-success mt-2">
                <a type="button" class="btn btn-secondary btn-sm btncancel text-light" data-bs-dismiss="modal">
                <i class="bi bi-person-x me-1"></i> Batal</a>
                <a type="submit" href="{{ url('deletearticle/'.$v->id) }}" class="btn btn-primary btn-sm btnacc text-light">
                <i class="bi bi-person-check me-1"></i> Setuju</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection