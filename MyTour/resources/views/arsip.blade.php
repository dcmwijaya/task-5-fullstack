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
                <strong>Kelola Arsip &nbsp; <i class="fa-regular fa-folder-open"></i></strong>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid"><br>
            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
            <p>
                Make sure to keep all page content within the
                <code>#page-content-wrapper</code>
                . The top navbar is optional, and just for demonstration. Just create an element with the
                <code>#sidebarToggle</code>
                ID which will toggle the menu when clicked.
            </p>
        </div>
    </div>
</div>
@endsection