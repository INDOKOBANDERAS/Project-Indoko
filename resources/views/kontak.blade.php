@extends('app')

@section('title', 'Kontak - Donasiku')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-6">
    
    <!-- Header: Singkat & Jelas -->
    <div class="text-center mb-16">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Hubungi Kami</h1>
        <p class="text-sm text-gray-500">Kami siap membantu. Kirimkan pertanyaan atau saran Anda.</p>
    </div>

    <!-- Info Kontak: Horizontal & Clean -->
    <div class="grid grid-cols-2 gap-8 mb-16 pb-12 border-b border-gray-100">
        <div>
            <h3 class="text-[10px] uppercase tracking-widest text-gray-400 font-bold mb-3">Alamat & Email</h3>
            <p class="text-sm text-gray-800 leading-relaxed">
                Jl. A Yani No. 111, Pontianak, Indonesia<br>
                <span class="text-blue-600">unmuhpnk@ac.id</span>
            </p>
        </div>
        <div>
            <h3 class="text-[10px] uppercase tracking-widest text-gray-400 font-bold mb-3">Bantuan Cepat</h3>
            <p class="text-sm text-gray-800 leading-relaxed">
                0895 1065 2443<br>
                <span class="text-gray-500 italic">Sen - Jum: 09:00 - 17:00</span>
            </p>
        </div>
    </div>

    <!-- Form: Minimalis -->
    <div class="space-y-8">
        <h2 class="text-xs font-bold uppercase tracking-[0.2em] text-gray-400 mb-8">Kirim Pesan</h2>
        
        <form action="#" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1">
                    <label class="text-[11px] font-bold text-gray-400 uppercase">Nama Lengkap</label>
                    <input type="text" class="w-full bg-transparent border-b border-gray-200 py-2 focus:border-gray-900 focus:outline-none transition text-sm" placeholder="Indoko Banderas">
                </div>
                <div class="space-y-1">
                    <label class="text-[11px] font-bold text-gray-400 uppercase">Alamat Email</label>
                    <input type="email" class="w-full bg-transparent border-b border-gray-200 py-2 focus:border-gray-900 focus:outline-none transition text-sm" placeholder="nama@email.com">
                </div>
            </div>

            <div class="space-y-1">
                <label class="text-[11px] font-bold text-gray-400 uppercase">Pesan Anda</label>
                <textarea rows="3" class="w-full bg-transparent border-b border-gray-200 py-2 focus:border-gray-900 focus:outline-none transition text-sm resize-none" placeholder="Apa yang bisa kami bantu?"></textarea>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full md:w-auto px-10 py-3 bg-gray-900 text-white text-xs font-bold uppercase tracking-widest hover:bg-gray-800 transition rounded-sm shadow-sm">
                    Kirim Sekarang
                </button>
            </div>
        </form>
    </div>

</div>
@endsection