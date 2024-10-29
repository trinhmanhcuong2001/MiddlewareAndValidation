<h1>Chào mừng trở lại {{ Auth::user()->name }}</h1>
@if (session()->has('error'))
    <p>{{ session()->get('error') }}</p>
@endif

<ul>
    <li><a href="{{ route('user.index') }}">Danh sách User</a></li>
    <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
</ul>
