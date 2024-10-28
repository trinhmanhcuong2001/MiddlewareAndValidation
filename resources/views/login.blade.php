<h1>Đây là trang login</h1>
@if (Session::has('error'))
    <p>{{ Session::get('error') }}</p>
@endif
<a href="{{ route('home') }}">Trang chủ</a>
