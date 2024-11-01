{{-- <h1>Chào mừng trở lại {{ Auth::user()->name }}</h1>
@if (session()->has('error'))
    <p>{{ session()->get('error') }}</p>
@endif

<ul>
    <li><a href="{{ route('user.index') }}">Danh sách User</a></li>
    <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
</ul> --}}

@extends('layout')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="route('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">Danh sách User</a>
                    </li>

                </ul>
                <div class="navbar-nav mb-2 mb-lg-0">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @include('alert')
@endsection
