@extends('layouts.appmenu')

@section('content')

<div class="card shadow border-0 rounded-4">

    <div class="card-body">

        <h2 class="fw-bold text-primary mb-4">
            Data Buku Tamu
        </h2>

        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif

        <table class="table table-bordered table-hover align-middle">

            <thead class="table-primary">

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pesan</th>
                    <th width="120">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @foreach($guestbooks as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $item->nama }}
                    </td>

                    <td>
                        {{ $item->pesan }}
                    </td>

                    <td>

                        <form action="{{ route('admin.delete', $item->id) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection