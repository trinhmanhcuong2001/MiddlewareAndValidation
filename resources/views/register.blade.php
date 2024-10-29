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
    <form action="{{ route('postRegister') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên của bạn">
        <input type="text" name="email" placeholder="Nhập email của bạn">
        <input type="password" name="password" placeholder="Nhập mật khẩu của bạn">
        <button type="submit">Đăng ký</button>
    </form>
</body>

</html>
