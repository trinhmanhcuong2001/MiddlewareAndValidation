@extends('layout')
@section('content')
    <h2 class="text-center">Danh sách User</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Chức vụ</th>
                <th>Tính năng</th>
            </tr>
        </thead>
        <tbody>
            @if (count($users) > 0)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            @if (auth()->id() !== $user->id)
                                <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Cập nhật</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
