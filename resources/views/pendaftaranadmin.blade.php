<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Aplikasi Kursus Bahasa Asing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="w-64 min-h-screen bg-gray-800 transition-all duration-300 ease-in-out fixwe">
            <div class="flex flex-col items-start py-4 px-6 fixed">
                <button onclick="toggleSidebar()" class="p-2 text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <nav class="mt-6 space-y-4">
                    <a href="{{ url('/dashboardadmin') }}" class="p-2 text-white flex items-center space-x-2 hover:bg-gray-700 rounded transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ url('/user') }}" class="p-2 text-white flex items-center space-x-2 hover:bg-gray-700 rounded transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span>Pengguna</span>
                    </a>
                    <a href="{{ url('/pendaftaranadmin') }}" class="p-2 text-white flex items-center space-x-2 hover:bg-gray-700 rounded transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Pendaftaran</span>
                    </button>
                    <a href="{{ url('/tutormateri') }}" class="p-2 text-white flex items-center space-x-2 hover:bg-gray-700 rounded transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <span>Materi</span>
                    </a>
                    <a href="{{ url('/quiz') }}" class="p-2 text-white flex items-center space-x-2 hover:bg-gray-700 rounded transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <span>Quiz</span>
                    </a>
                    <button class="p-2 text-white flex items-center space-x-2 hover:bg-gray-700 rounded transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Jadwal</span>
                    </button>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col text-center">
            <!-- Header -->
            <header class="bg-white p-4 shadow">
                <div class="container mx-auto">
                    <h1 class="text-xl font-semibold text-gray-800">Aplikasi Kursus Bahasa Asing</h1>
                </div>
            </header>
            <div class="overflow-x-auto">
            <table class="table-auto border border-gray-400 border-collapse w-full mt-16php ">
            <thead>
                <tr class="bg-gray-100 text-c">
                    <th class="border border-gray-400 px-4 py-2">No</th>
                    <th class="border border-gray-400 px-4 py-2">ID</th>
                    <th class="border border-gray-400 px-4 py-2">Nama</th>
                    <th class="border border-gray-400 px-4 py-2">No telpon</th>
                    <th class="border border-gray-400 px-4 py-2">Alamat</th>
                    <th class="border border-gray-400 px-4 py-2">Program</th>
                    <th class="border border-gray-400 px-4 py-2">Selama (Bulan)</th>
                    <th class="border border-gray-400 px-4 py-2">Harga</th>
                    <th class="border border-gray-400 px-4 py-2">Konfirmasi</th> <!-- Posisi header Aksi -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">1</td>
                    <td class="border border-gray-400 px-4 py-2">1</td>
                    <td class="border border-gray-400 px-4 py-2">Blum</td>
                    <td class="border border-gray-400 px-4 py-2">1234567890</td>
                    <td class="border border-gray-400 px-4 py-2">Batam</td>
                    <td class="border border-gray-400 px-4 py-2">English</td>
                    <td class="border border-gray-400 px-4 py-2">1</td>
                    <td class="border border-gray-400 px-4 py-2">300.000</td>
                    <td class="border border-gray-400 px-4 py-2 space-x-2">
                        <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">Konfirmasi</button>
                    </td>
                    
                </tr>
                <!-- Baris lain bisa ditambahkan di sini -->
                <tr>
                    <td class="border border-gray-400 px-4 py-2">2</td>
                    <td class="border border-gray-400 px-4 py-2">2</td>
                    <td class="border border-gray-400 px-4 py-2">2-2-2222</td>
                    <td class="border border-gray-400 px-4 py-2">0987654321</td>
                    <td class="border border-gray-400 px-4 py-2">Batam</td>
                    <td class="border border-gray-400 px-4 py-2">Jepang</td>
                    <td class="border border-gray-400 px-4 py-2">2</td>
                    <td class="border border-gray-400 px-4 py-2">600.000</td>
                    <td class="border border-gray-400 px-4 py-2 space-x-2">
                        <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">Konfirmasi</button>
                    </td>
                    
                </tr>
            </tbody>
            </table>
        </div>
