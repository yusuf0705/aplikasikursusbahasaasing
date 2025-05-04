<?php
// pengguna
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\HistoryController;

// Admin dan tutor
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TutorMateriController;
use App\Http\Controllers\PendaftaranAdminController;
use App\Http\Controllers\QuizController;


// Route::get('/', [HomeController::class, 'landingpage']);
// route::get('/landingpage', [HomeController::class, 'landingpage']);
// route::get('/course-detail', [HomeController::class, 'course-detail']);
// Route::get('/course/{name}', [CourseController::class, 'show']);
// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
// Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
// Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// Route::get('/pembayaran', [PembayaranController::class, 'create'])->name('pembayaran.create');
// Route::post('/pembayaran', [PembayaranController::class, 'success'])->name('pembayaran.success');

// Route::get('/materi/{kodeBahasa}', [MateriController::class, 'show'])->name('materi.show');
// Route::get('/materi', function () {
//     $kodeBahasa = 'ID';
//     return view('materi', compact('kodeBahasa'));
// });
// Route::get('/materi', function () {
//     return view('materi'); // asumsi file Blade-nya bernama materi.blade.php
// });
// Route::get('/materi', [MateriController::class, 'index']);
// Route::get('/history', [HistoryController::class, 'index'])->name('history');
// Route::get('/history', function () {
//     return view('history'); // Menampilkan halaman history secara statis
// })->name('history');
// Route::get('/course/{name}', [CourseController::class, 'show']);
// Route::get('/course/{name}/materi', [CourseController::class, 'materi']);


// route admin dan tutor
Route::get('/', [HomeController::class, 'dashboardadmin']);
Route::get('/dashboardadmin', [DashboardAdminController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/tutormateri', [TutorMateriController::class, 'index']);
Route::get('/pendaftaranadmin', [PendaftaranAdminController::class, 'index']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/quiz', [QuizController::class, 'index']);

