@extends('layouts.app')

@section('title', 'Home - Galeri Foto')

@section('content')
    <h1 class="text-center">Daftar Foto</h1>
<div class="container py-5">
    <h1>Galeri Foto</h1>
    <div class="row">
        @foreach ($photos as $photo)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $photo->image_url) }}" class="card-img-top" alt="{{ $photo->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $photo->title }}</h5>
                    <p class="card-text">{{ $photo->description }}</p>
                    <a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus foto ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    
    </div>
</div>
@endsection
