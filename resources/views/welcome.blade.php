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
    <form action="{{ route('update') }}" method="POST">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Nhập tên">
        <input type="text" name="email" placeholder="Nhập email">
        <input type="password" name="password" placeholder="Nhập mật khẩu">
        <button type="submit">Gửi</button>
    </form>
</body>

</html>
