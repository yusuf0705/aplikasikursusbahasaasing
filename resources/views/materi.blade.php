<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-gray-50 ">

<div class="flex">
        <!-- Sidebar -->
        <aside class="fixed w-20 md:w-24 bg-pink-100 border-r border-gray-300 h-screen flex flex-col items-center py-4 space-y-6">
            <button class="text-purple-700 hover:text-purple-900">
            <span class="material-icons">list</span>
            
            </button>
            <nav class="flex flex-col items-center space-y-6 text-purple-800 text-sm">
                <a href="{{ route('pendaftaran.create', ['harga' => 300000]) }}" class="flex flex-col items-center">
                    <span class="material-icons">add</span>
                    Daftar
                </a>
                <a href="{{ url('/dashboard') }}" class="flex flex-col items-center">
                    <span class="material-icons">dashboard</span>
                    Dashboard
                </a>
                <a href="{{ url('/materi') }}" class="flex flex-col items-center">
                    <span class="material-icons">school</span>
                    Kursus
                </a>

                <a href="{{ url('/history') }}" class="flex flex-col items-center">
                    <span class="material-icons">book</span>
                    History
                </a>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 pt-6 pl-24 pr-5">
            @if(session('nama'))
                <!-- Bagian Atas: Bendera dan Pengumuman hanya jika sudah mendaftar -->
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center space-x-3">
                        <img src="{{ $flagUrl }}" 
                        alt="Flag {{ $kodeBahasa ?? 'default' }}" 
                        class="w-24 h-auto rounded shadow">
                        

                        <h1 class="text-2xl font-bold mb-4">
                            Materi Bahasa: {{ strtoupper($kodeBahasa ?? 'Belum Dipilih') }}
                        </h1>
                    </div>
                    <div class="bg-gray-300 p-6 rounded-lg shadow text-xl font-bold text-center">
                        Info jadwal &<br>Pengumuman
                    </div>
                </div>

                <!-- Daftar Materi hanya ditampilkan jika sudah mendaftar -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h1 class="text-2xl font-bold mb-4">Materi Bahasa: {{ strtoupper($kodeBahasa ?? 'Belum Dipilih') }}</h1>
                    
                    @if(!empty($materi) && count($materi) > 0)
                        <ul class="space-y-4">
                            @foreach($materi as $item)
                                <li class="bg-gray-100 p-4 rounded-lg shadow-sm">
                                    <h3 class="text-lg font-semibold">{{ $item['judul'] }}</h3>
                                    <p class="text-gray-600">{{ $item['deskripsi'] }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-600">Tidak ada materi untuk bahasa ini.</p>
                        <a href="{{ route('pendaftaran.create', ['harga' => 300000]) }}"
   class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 text-center w-full block">
   Mulai Daftar
</a>
                    @endif
                    
                </div>
            @else
                <!-- HANYA Form Pendaftaran jika belum mendaftar, tanpa tampilan lainnya -->
                <div class="mt-8 bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
                    <h2 class="text-2xl font-bold mb-6 text-center text-purple-800">Pendaftaran Kursus Bahasa</h2>
                    <p class="text-gray-600 mb-6 text-center">Untuk mengakses materi, silakan mendaftar terlebih dahulu</p>
                    <a href="{{ route('pendaftaran.create', ['harga' => 300000]) }}"
   class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 text-center w-full block">
Daftar
</a>
                    <!-- <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        </div>
                        
                        <div>
                            <label for="kodeBahasa" class="block text-sm font-medium text-gray-700 mb-1">Pilih Bahasa</label>
                            <select name="kodeBahasa" id="kodeBahasa" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                                <option value="">-- Pilih Bahasa --</option>
                                <option value="english">English</option>
                                <option value="japanese">Jepang</option>
                                <option value="mandarin">mandarin</option>
                                <option value="korean">Korean</option>
                                <option value="spanyol">spanyol</option>
                                <option value="german">German</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="alasan" class="block text-sm font-medium text-gray-700 mb-1">Alasan Mendaftar</label>
                            <textarea name="alasan" id="alasan" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-purple-600 text-white py-2 px-4 rounded-md hover:bg-purple-700 transition duration-300">Daftar Sekarang</button>
                    </form> -->
                </div>
            @endif
        </main>
    </div>
</body>
</html>