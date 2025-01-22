@extends('layouts.app')

@section('title', 'Peta')

@section('content')

<div class="container mt-4">
    <h2>Cuaca di Lokasi</h2>
    <div id="weather" class="mt-3">
        <p>Memuat informasi cuaca...</p>
        <script src="{{ asset('js/weather.js') }}"></script>
    </div>
</div>

<div class="container mt-4">
    <h2>Lokasi Kami</h2>
    <p>Berikut adalah lokasi Sekolah Kami:</p>
    <div id="map" style="height: 400px; width: 100%;"></div>
</div>

<script>
    function initMap() {
        const location = { lat: -7.290779140159621, lng: 112.77913856626402 }; // Contoh koordinat Jakarta
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: location,
        });
        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSFE3DZlcCk2bz5LdUmnlpL5OW15vrJ2w
&callback=initMap" async defer></script>

@endsection