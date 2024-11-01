@extends('layout')
@section('content')
    @include('alert')
    <h1 class="text-center">Đăng ký</h1>
    <form action="{{ route('postRegister') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <p>Bạn đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập!</a></p>
        <button type="submit" class="btn btn-primary">Đăng ký</button>
    </form>
@endsection
