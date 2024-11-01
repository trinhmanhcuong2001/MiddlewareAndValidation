@extends('layout')
@section('content')
    @include('alert')
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <legend>Update User</legend>
        <div class="mb-3">
            <label for="nameTextInput" class="form-label">Name</label>
            <input type="text" id="nameTextInput" class="form-control" placeholder="Enter name" value="{{ $user->name }}"
                name="name">
        </div>
        <div class="mb-3">
            <label for="emailTextInput" class="form-label">Email</label>
            <input type="text" id="emailTextInput" class="form-control" placeholder="Enter email"
                value="{{ $user->email }}" name="email">
        </div>
        <div class="mb-3">
            <label for="passwordTextInput" class="form-label">Password</label>
            <input type="password" id="emailTextInput" class="form-control" placeholder="Enter password" name="password">
        </div>
        <div class="mb-3">
            <label for="roledSelect" class="form-label">Quyền</label>
            <select id="roleSelect" class="form-select" name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
