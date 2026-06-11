@extends('layouts.appmenu')

@section('content')

<h1 class="text-3xl font-bold mb-3">
    Selamat Datang User 🙌
</h1>

<p>
    Halo, {{ auth()->user()->name }}
</p>

<p>
    Role:
    <b>{{ auth()->user()->role }}</b>
</p>

@endsection