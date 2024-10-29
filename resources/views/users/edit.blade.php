<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Nhập tên" value="{{ $user->name }}">
        <input type="text" name="email" placeholder="Nhập email" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Nhập mật khẩu">
        <select name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit">Cập nhật</button>
    </form>
</body>

</html>
