<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Chức vụ</th>
            <th>Tính năng</th>
        </tr>
        @if (count($users) > 0)
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}">Cập nhật</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
</body>

</html>
