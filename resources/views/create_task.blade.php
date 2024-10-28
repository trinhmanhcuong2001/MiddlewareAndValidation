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
    <form action="{{ route('task.create') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Nhập tiêu đề">
        <input type="text" name="description" placeholder="Nhập mô tả">
        <select name="completed">
            <option value="Chưa hoàn thành">Chưa hoàn thành</option>
            <option value="Hoàn thành">Hoàn thành</option>
        </select>
        <button type="submit">Tạo</button>
    </form>

</body>

</html>
