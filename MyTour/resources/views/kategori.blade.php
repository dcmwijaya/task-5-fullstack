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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i class="bi bi-caret-right-fill me-1"></i> Umum
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body mt-1">
                                <table class="table table-hover table-borderless table-striped table-responsive">
                                    <thead>
                                        <tr class="table-secondary">
                                            <th scope="col" class="col-2"><i class="fa-solid fa-arrow-up-1-9 me-1"></i>No</th>
                                            <th scope="col" class="col-2"><i class="bi bi-card-image me-1"></i> Foto</th>
                                            <th scope="col" class="col-2"><i class="fa-solid fa-ship me-1"></i> Judul</th>
                                            <th scope="col" class="col-2"><i class="fa-regular fa-comment-dots me-1"></i> Komentar</th>
                                            <th scope="col" class="col-2"><i class="bi bi-person-square me-1"></i> Penulis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($umum != NULL)
                                            @php($no = ($umum->perPage() * $umum->currentPage()) - ($umum->perPage() - 1))
                                            @foreach($umum as $vumum)
                                                <tr>
                                                    <td scope="row">{{ $no++ }}</td>
                                                    <td><img src="{{ $vumum->image }}" class="img-fluid rounded-start img-profile" alt="gambartour" style="height:50px;max-height:auto;width:100px;max-width:auto;"></td>
                                                    <td>{{ $vumum->title }}</td>
                                                    <td>{{ $vumum->content }}</td>
                                                    <td>
                                                        @if($vumum->user_id == '1'){{ "Anastasya Geraldine" }}
                                                        @elseif($vumum->user_id == '2'){{ "Andikha Refanza" }}
                                                        @elseif($vumum->user_id == '3'){{ "Alfiansyah Nukita Prada" }}
                                                        @else {{ "Tidak Diketahui" }}
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td scope="row" colspan="5">{{ "Data tidak ditemukan!!" }}</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                {{ $umum->links() }}
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
                                <table class="table table-hover table-borderless table-striped table-responsive">
                                    <thead>
                                        <tr class="table-secondary">
                                            <th scope="col" class="col-2"><i class="fa-solid fa-arrow-up-1-9 me-1"></i>No</th>
                                            <th scope="col" class="col-2"><i class="bi bi-card-image me-1"></i> Foto</th>
                                            <th scope="col" class="col-2"><i class="fa-solid fa-ship me-1"></i> Judul</th>
                                            <th scope="col" class="col-2"><i class="fa-regular fa-comment-dots me-1"></i> Komentar</th>
                                            <th scope="col" class="col-2"><i class="bi bi-person-square me-1"></i> Penulis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($khusus != NULL)
                                            @php($no = ($khusus->perPage() * $khusus->currentPage()) - ($khusus->perPage() - 1))
                                            @foreach($khusus as $vkhusus)
                                                <tr>
                                                    <td scope="row">{{ $no++ }}</td>
                                                    <td><img src="{{ $vkhusus->image }}" class="img-fluid rounded-start img-profile" alt="gambartour" style="height:50px;max-height:auto;width:100px;max-width:auto;"></td>
                                                    <td>{{ $vkhusus->title }}</td>
                                                    <td>{{ $vkhusus->content }}</td>
                                                    <td>
                                                        @if($vkhusus->user_id == '1'){{ "Anastasya Geraldine" }}
                                                        @elseif($vkhusus->user_id == '2'){{ "Andikha Refanza" }}
                                                        @elseif($vkhusus->user_id == '3'){{ "Alfiansyah Nukita Prada" }}
                                                        @else {{ "Tidak Diketahui" }}
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td scope="row" colspan="5">{{ "Data tidak ditemukan!!" }}</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                {{ $umum->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection