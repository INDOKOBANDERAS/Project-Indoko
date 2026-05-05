@extends('app')

@section('title', 'Profil - Donasiku')

@section('content')
<div class="max-w-xl mx-auto py-12 px-6">
    
    <!-- Bagian Header Profil -->
    <div class="flex flex-col items-center mb-12">
        <div class="w-20 h-20 bg-gray-900 text-white rounded-full flex items-center justify-center text-xl font-semibold mb-4 shadow-sm">
            IB
        </div>
        <h1 class="text-xl font-bold text-gray-900">Indoko Banderas</h1>
        <p class="text-gray-500 text-sm">indoko.banderas@email.com</p>
        
        <div class="flex gap-4 mt-6">
            <button class="text-xs font-semibold px-4 py-2 border border-gray-200 rounded-full hover:bg-gray-50 transition">
                Edit Profil
            </button>
            <button class="text-xs font-semibold px-4 py-2 text-red-500 border border-transparent hover:underline transition">
                Keluar
            </button>
        </div>
    </div>
    
    <!-- Ringkasan Statistik -->
    <div class="grid grid-cols-3 gap-4 py-8 border-y border-gray-100 mb-12">
        <div class="text-center">
            <span class="block text-lg font-bold text-gray-900">—</span>
            <span class="text-[10px] uppercase tracking-[0.15em] text-gray-400 font-bold">Total Donasi</span>
        </div>
        <div class="text-center border-x border-gray-100">
            <span class="block text-lg font-bold text-gray-900">—</span>
            <span class="text-[10px] uppercase tracking-[0.15em] text-gray-400 font-bold">Aktif</span>
        </div>
        <div class="text-center">
            <span class="block text-lg font-bold text-gray-900">—</span>
            <span class="text-[10px] uppercase tracking-[0.15em] text-gray-400 font-bold">Campaign</span>
        </div>
    </div>

    <!-- List Riwayat Sederhana -->
    <div class="space-y-10">
        <h2 class="text-[11px] font-bold uppercase tracking-[0.2em] text-gray-400">Aktivitas Terakhir</h2>

        <!-- Item Template -->
        @for ($i = 1; $i <= 3; $i++)
        <div class="group flex justify-between items-center">
            <div class="space-y-2">
                <div class="h-4 w-40 bg-gray-100 rounded"></div>
                <div class="h-3 w-24 bg-gray-50 rounded"></div>
            </div>
            <div class="text-right space-y-2">
                <div class="h-4 w-20 bg-gray-100 rounded ml-auto"></div>
                <div class="h-3 w-12 bg-green-50 rounded ml-auto"></div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Link Bawah -->
    <div class="mt-16 text-center">
        <a href="#" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 hover:text-gray-900 transition border-b border-transparent hover:border-gray-900 pb-1">
            Lihat Semua Aktivitas
        </a>
    </div>
</div>
@endsection