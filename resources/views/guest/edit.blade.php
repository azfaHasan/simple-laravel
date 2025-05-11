@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Pesan</h2>
    <form method="POST" action="{{ route('guest.update', $guest) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $guest->name }}" required>
        </div>
        <div class="mb-3">
            <label>Pesan</label>
            <textarea name="message" class="form-control" required>{{ $guest->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
