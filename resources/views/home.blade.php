@extends('app')

@section('title', 'Home - Donasiku')

@section('content')

<!-- Hero Section -->
<div class="text-center py-12 mb-8">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">
        Selamat Datang di Donasiku
    </h1>
    <p class="text-xl text-gray-600 mb-6">
        Mari berbagi kebaikan dan bantu sesama melalui donasi
    </p>
    <div class="flex justify-center gap-4">
        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg transition">
            Donasi Sekarang
        </a>
        <a href="#" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-6 py-3 rounded-lg transition">
            Pelajari Lebih Lanjut
        </a>
    </div>
</div>

@endsection