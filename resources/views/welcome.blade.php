@if (session()->has('error'))
    {{ session()->get('error') }}
@endif
@if (session()->has('name'))
    <h1>Chào mừng trở lại {{ session()->get('name') }}</h1>
    <a href="{{ route('admin') }}">Vào trang admin</a>
    <a href="{{ route('logout') }}">Đăng xuất</a>
@else
    <a href="{{ route('login') }}">Đăng nhập</a>
@endif
