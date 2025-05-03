<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        // Data kursus untuk digunakan di halaman ini
        const courses = {
            'English': {
                'name': 'English',
                'image': 'https://tse2.mm.bing.net/th?id=OIP.HaU0bQXXm9v2gipkfm5vVwHaEV&pid=Api&P=0&h=220',
                'description': 'Belajar bahasa Inggris dari dasar hingga mahir.',
            },
            'Jepang': {
                'name': 'Jepang',
                'image': 'https://www.situsbelanjaonline.com/china/images/arti%20kata%20dan%20bendera%20jepang.jpg',
                'description': 'Kuasai bahasa Jepang untuk anime, pekerjaan, dan studi.',
            },
            'Mandarin': {
                'name': 'Mandarin',
                'image': 'https://img.okezone.com/content/2016/11/28/337/1553402/pengibaran-bendera-china-ancam-kedaulatan-nkri-BviKp6TwD4.jpg',
                'description': 'Pelajari Mandarin secara praktis dan menyenangkan.',
            },
            'Korea': {
                'name': 'Korea',
                'image': 'https://wallpaperaccess.com/full/22460.jpg',
                'description': 'Belajar bahasa Korea untuk drama, budaya, dan komunikasi.',
            },
            'Spanyol': {
                'name': 'Spanyol',
                'image': 'https://tse2.mm.bing.net/th?id=OIP.eY9kN9s58DMc-SW3H5S3KwHaEK&pid=Api&P=0&h=220',
                'description': 'Jelajahi dunia dengan bahasa Spanyol yang kaya dan menarik.',
            },
            'Jerman': {
                'name': 'Jerman',
                'image': 'https://cdn.pixabay.com/photo/2015/11/24/16/23/flag-germany-1060305_1280.jpg',
                'description': 'Bahasa Jerman untuk studi dan kerja di Eropa.',
            }
        };
    </script>
</head>
<body class="bg-purple-50 min-h-screen font-sans">
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
            <!-- Header -->
            <div class="relative rounded-2xl overflow-hidden bg-cover bg-center h-96 flex items-center justify-center text-white mb-8"
                 style="background-image: url('https://semanasantabaena.com/wp-content/uploads/2019/12/manfaat-membaca-buku.jpg');">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                <div class="relative text-center">
                    <h1 class="text-2xl font-bold">Kursus Bahasa</h1>
                </div>
            </div>

            <!-- Kursus List -->
            <div class="space-y-4" id="courseList">
                <!-- Course items will be inserted here by JavaScript -->
            </div>
    </main>
    </div>

    <script>
        // Render course list
        document.addEventListener('DOMContentLoaded', function() {
            const courseListContainer = document.getElementById('courseList');
            
            for (const [key, course] of Object.entries(courses)) {
                const courseElement = document.createElement('div');
                courseElement.className = 'flex items-start gap-4';
                courseElement.innerHTML = `
                    <div class="w-12 h-12 bg-gray-100 rounded-md flex items-center justify-center overflow-hidden">
                        <img src="${course.image}" alt="${course.name}" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">
                            <a href="/course/${course.name}" class="text-purple-700 hover:underline">
                                ${course.name}
                            </a>
                        </h2>
                        <p class="text-sm text-gray-500">Harga: Rp300.000/Bulan</p>
                        <p class="text-sm text-gray-400">${course.description}</p>
                    </div>
                `;
                courseListContainer.appendChild(courseElement);
            }
        });
    </script>
</body>
</html>