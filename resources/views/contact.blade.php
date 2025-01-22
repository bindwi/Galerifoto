@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Kontak Kami</h1>
    <p class="text-center">Jika Anda memiliki pertanyaan atau ingin menghubungi kami, silakan isi formulir di bawah ini:</p>
    
    <form action="#" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection
