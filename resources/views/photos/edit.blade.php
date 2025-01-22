@extends('layouts.app')

@section('title', 'Edit Foto')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Edit Foto</h1>
    <form action="{{ route('photos.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $photo->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $photo->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Ganti Foto</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('photos.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
