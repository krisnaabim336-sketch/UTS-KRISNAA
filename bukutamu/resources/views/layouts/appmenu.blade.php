<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<nav style="padding:15px; background:#eee;">

    <a href="{{ route('dashboard') }}">Dashboard</a>

    @if(auth()->user()->role == 'user')
        | <a href="{{ route('guestbook') }}">Buku Tamu</a>
    @endif

    @if(auth()->user()->role == 'admin')
        | <a href="{{ route('admin.dashboard') }}">Admin</a>
        | <a href="{{ route('admin.guestbooks') }}">Data Buku Tamu</a>
        | <a href="{{ route('admin.users') }}">Data User</a>
    @endif

    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submit">Logout</button>
    </form>

</nav>

<div style="padding:20px;">
    @yield('content')
</div>

</body>
</html>