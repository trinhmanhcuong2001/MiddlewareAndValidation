@if (session()->has('success'))
    <h1>{{ session()->get('success') }}</h1>
@endif

<a href="{{ route('task.create') }}">Tạo công việc</a>
