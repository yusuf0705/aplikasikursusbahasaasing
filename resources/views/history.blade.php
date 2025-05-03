<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-50">

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
                <a href="{{ url('/dashboard') }}" class="flex flex-col items-center text-purple-800 active:bg-blue-200 active:text-white rounded-md px-3 py-2 transition-all duration-150">
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

        <!-- Main Content -->
        <div class="flex-1 pt-6 pl-24 pr-5">
            <div class="w-full max-w-4xl mx-auto p-8 bg-white border border-gray-300 rounded-lg shadow-lg">
                <h2 class="text-center text-lg font-semibold border-b border-gray-300 pb-2 mb-6">Riwayat Pembayaran</h2>

                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="border-b">
                            <th class="px-4 py-2 text-left">Tanggal</th>
                            <th class="px-4 py-2 text-left">Metode Pembayaran</th>
                            <th class="px-4 py-2 text-left">Harga</th>
                            <th class="px-4 py-2 text-left">No. Rekening</th>
                            <th class="px-4 py-2 text-left">Status Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris 1: Belum Dibayar -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2025-04-24</td>
                            <td class="px-4 py-2">Transfer</td>
                            <td class="px-4 py-2">Rp 150,000</td>
                            <td class="px-4 py-2">123456789</td>
                            <td class="px-4 py-2 text-red-500">Belum Dibayar</td>
                        </tr>

                        <!-- Baris 2: Sudah Dibayar -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2025-04-23</td>
                            <td class="px-4 py-2">E-Wallet</td>
                            <td class="px-4 py-2">Rp 200,000</td>
                            <td class="px-4 py-2">987654321</td>
                            <td class="px-4 py-2 text-green-500">Sudah Dibayar</td>
                        </tr>

                        <!-- Baris 3: Belum Dibayar -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2025-04-22</td>
                            <td class="px-4 py-2">Kartu Kredit</td>
                            <td class="px-4 py-2">Rp 300,000</td>
                            <td class="px-4 py-2">555555555</td>
                            <td class="px-4 py-2 text-red-500">Belum Dibayar</td>
                        </tr>

                        <!-- Baris 4: Sudah Dibayar -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2025-04-21</td>
                            <td class="px-4 py-2">Transfer</td>
                            <td class="px-4 py-2">Rp 250,000</td>
                            <td class="px-4 py-2">111223344</td>
                            <td class="px-4 py-2 text-green-500">Sudah Dibayar</td>
                        </tr>

                        <!-- Tambahkan lebih banyak baris history pembayaran di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
