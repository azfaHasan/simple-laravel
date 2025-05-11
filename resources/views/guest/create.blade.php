@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Isi Buku Tamu</h2>
    <form method="POST" action="{{ route('guest.store') }}">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Pesan</label>
            <textarea name="message" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Kirim</button>
    </form>
</div>
@endsection
