@extends('app')

@section('title', 'Donasi - Donasiku')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Donasi Sekarang</h1>
        <p class="text-gray-600">Pilih campaign dan salurkan donasi terbaik Anda</p>
    </div>

    <!-- Form Donasi -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Pilih Campaign</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option>Bantu Anak Yatim</option>
                    <option>Bencana Alam Bandung</option>
                    <option>Pendidikan Anak Desa</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nominal Donasi</label>
                <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan nominal (Rp)">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Pesan (Opsional)</label>
                <textarea rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Tulis pesan dukungan..."></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition">
                Donasi Sekarang
            </button>
        </form>
    </div>

    <!-- Daftar Campaign -->
    <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Campaign Tersedia</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-32 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                    <span class="text-white text-3xl">❤️</span>
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
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-32 bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                    <span class="text-white text-3xl">🏠</span>
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
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-32 bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center">
                    <span class="text-white text-3xl">📚</span>
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
</div>
@endsection