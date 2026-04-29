@extends('app')

@section('title', 'Profil - Donasiku')

@section('content')

<div class="max-w-4xl mx-auto">
    <!-- Profile Header -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex items-center gap-6">
            <div class="w-24 h-24 bg-blue-500 rounded-full flex items-center justify-center text-white text-4xl font-bold">
                IB
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Indoko Banderas</h1>
                <p class="text-gray-600">indoko.banderas@email.com</p>
                <p class="text-sm text-gray-500 mt-1">Member sejak Januari 2026</p>
            </div>
            <div class="ml-auto">
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                    Edit Profil
                </button>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <div class="text-3xl font-bold text-green-600">Rp 5.000.000</div>
            <div class="text-gray-600 mt-2">Total Donasi</div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <div class="text-3xl font-bold text-blue-600">12</div>
            <div class="text-gray-600 mt-2">Donasi Aktif</div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <div class="text-3xl font-bold text-purple-600">5</div>
            <div class="text-gray-600 mt-2">Campaign Dibuat</div>
        </div>
    </div>

    <!-- Riwayat Donasi -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Riwayat Donasi</h2>
        <div class="space-y-4">
            <div class="border-b pb-4">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Bantu Anak Yatim</h3>
                        <p class="text-sm text-gray-500">15 April 2026</p>
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                        Berhasil
                    </span>
                </div>
                <p class="text-gray-600 mt-2">Rp 500.000</p>
            </div>
            <div class="border-b pb-4">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Bencana Alam Bandung</h3>
                        <p class="text-sm text-gray-500">10 Maret 2026</p>
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                        Berhasil
                    </span>
                </div>
                <p class="text-gray-600 mt-2">Rp 1.000.000</p>
            </div>
            <div class="pb-4">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-semibold text-gray-800">Pendidikan Anak Desa</h3>
                        <p class="text-sm text-gray-500">5 Februari 2026</p>
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">
                        Berhasil
                    </span>
                </div>
                <p class="text-gray-600 mt-2">Rp 750.000</p>
            </div>
        </div>
    </div>
</div>

@endsection
