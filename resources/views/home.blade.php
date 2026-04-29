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

<!-- Stats Section -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-lg shadow-md p-6 text-center">
        <div class="text-3xl font-bold text-blue-600">10.000+</div>
        <div class="text-gray-600 mt-2">Donatur</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 text-center">
        <div class="text-3xl font-bold text-green-600">Rp 1M+</div>
        <div class="text-gray-600 mt-2">Dana Terkumpul</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 text-center">
        <div class="text-3xl font-bold text-purple-600">500+</div>
        <div class="text-gray-600 mt-2">Campaign</div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 text-center">
        <div class="text-3xl font-bold text-orange-600">50+</div>
        <div class="text-gray-600 mt-2">Partner</div>
    </div>
</div>

<!-- Campaign Section -->
<div class="mb-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Campaign Populer</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Campaign Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                <span class="text-white text-4xl">❤️</span>
            </div>
            <div class="p-4">
                <h3 class="font-bold text-gray-800 mb-2">Bantu Anak Yatim</h3>
                <p class="text-gray-600 text-sm mb-3">Membantu anak yatim mendapatkan pendidikan dan kebutuhan sehari-hari.</p>
                <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                    <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Rp 7.500.000 terkumpul</span>
                    <span class="text-blue-600 font-semibold">75%</span>
                </div>
            </div>
        </div>

        <!-- Campaign Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="h-48 bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                <span class="text-white text-4xl">🏠</span>
            </div>
            <div class="p-4">
                <h3 class="font-bold text-gray-800 mb-2">Bencana Alam Bandung</h3>
                <p class="text-gray-600 text-sm mb-3">Bantuan korban bencana alam di Bandung Jawa Barat.</p>
                <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                    <div class="bg-green-500 h-2 rounded-full" style="width: 60%"></div>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Rp 6.000.000 terkumpul</span>
                    <span class="text-green-600 font-semibold">60%</span>
                </div>
            </div>
        </div>

        <!-- Campaign Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="h-48 bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center">
                <span class="text-white text-4xl">📚</span>
            </div>
            <div class="p-4">
                <h3 class="font-bold text-gray-800 mb-2">Pendidikan Anak Desa</h3>
                <p class="text-gray-600 text-sm mb-3">Memberikan akses pendidikan untuk anak-anak di daerah terpencil.</p>
                <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                    <div class="bg-purple-500 h-2 rounded-full" style="width: 45%"></div>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-600">Rp 4.500.000 terkumpul</span>
                    <span class="text-purple-600 font-semibold">45%</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-blue-500 rounded-lg shadow-md p-8 text-center text-white">
    <h2 class="text-2xl font-bold mb-2">Siap Berontribusi?</h2>
    <p class="mb-4">Setiap donasi Anda sangat berarti bagi mereka yang membutuhkan</p>
    <a href="#" class="inline-block bg-white text-blue-500 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
        Mulai Berdonasi
    </a>
</div>

@endsection