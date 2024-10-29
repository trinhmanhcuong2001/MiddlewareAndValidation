<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (session()->has('error'))
        <ul>
            <li>{{ session()->get('error') }}</li>
        </ul>
    @endif
    <form action="{{ route('postLogin') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Nhập email">
        <input type="password" name="password" placeholder="Nhập mật khẩu">
        <button type="submit">Đăng nhập</button>
    </form>
</body>

</html>
