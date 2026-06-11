@extends('layouts.appmenu')

@section('content')

<h1>Buku Tamu</h1>

<form action="{{ route('guestbook.store') }}" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama">
    <br><br>

    <textarea name="pesan" placeholder="Pesan"></textarea>
    <br><br>

    <button type="submit">Kirim</button>
</form>

<hr>

<h2>Riwayat Buku Tamu</h2>

@foreach($guestbooks as $item)

<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
    <b>{{ $item->nama }}</b>
    <p>{{ $item->pesan }}</p>
</div>

@endforeach

@endsection