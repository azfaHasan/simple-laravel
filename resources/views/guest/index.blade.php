@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Buku Tamu</h2>
    <a href="{{ route('guest.create') }}" class="btn btn-primary mb-3">Isi Buku Tamu</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Message</th>
            <th>Aksi</th>
        </tr>
        @foreach ($guest as $guest)
        <tr>
            <td>{{ $guest->name }}</td>
            <td>{{ $guest->message }}</td>
            <td>
                <a href="{{ route('guest.edit', $guest) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('guest.destroy', $guest) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
