@extends('layout')
@section('content')
    @include('alert')
    <h1 class="text-center">Đăng nhập hệ thống</h1>
    <form action="{{ route('postLogin') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký!</a></p>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
@endsection
