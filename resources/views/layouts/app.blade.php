<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Galeri Foto')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-gradient {
            background: linear-gradient(45deg, #007bff, #6c757d);
        }
        .card-shadow {
            border-radius: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>


</head>
<script src="{{ asset('js/scripts.js') }}"></script>

<body class="bg-light">
    <!-- Header -->
    <header class="bg-dark text-white text-center py-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient">
            <div class="container">
                <a class="navbar-brand" href="{{ route('photos.index') }}">Galeri Foto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('photos.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('photos.create') }}">Tambah Foto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('peta') ? 'active' : '' }}" href="{{ route('peta') }}">Peta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <div class="container my-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
