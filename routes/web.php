<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TekatekisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// INDEX
Route::get('/', function () {
    return view('index');
})->name('index');

// raport
Route::get('/raport', function () {
     return view('raport');
});

// guru
Route::get('/guru', function () {
    return view('guru');
});

// ROUTE HOME
Route::get('/beranda', function () {
    return view('index');
})->name('beranda');
// Route::get('/belajar', function () {
//     return view('belajar');
// })->name('belajar');
Route::get('/bermain', function () {
    return view('bermain');
})->name('bermain');
Route::get('/tekateki', function () {
    return view('teka-teki');
})->name('tekateki');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/login', function () {
    return view('login');
});

//belajar controller
Route::get('/belajar', 'App\Http\Controllers\Siswa@indexlevel')->name('level');
Route::get('/belajar/{level}', 'App\Http\Controllers\Siswa@materi')->name('materi');

// ROUTE DASBOR
Route::get('/dasbor', function () {
    return view('dasbor');
})->name('dasbor');
Route::get('/datasiswa', function () {
    return view('datasiswa');
})->name('datasiswa');
Route::get('/datamateri', function () {
    return view('datamateri');
})->name('datamateri');
Route::get('/datatekateki', function () {
    return view('datatekateki');
})->name('datatekateki');
Route::get('/pengaturanakun', function () {
    return view('pengaturanakun');
})->name('pengaturanakun');
// Route::get('/akunpengguna', function () {
//     return view('akunpengguna');
// })->name('akunpengguna');

// ! CRUD AKUN
Route::get('/akunpengguna', [UsersController::class, 'show'])->name('akun.index');
Route::get('/akunpengguna/{nama}/edit', [UsersController::class, 'edit'])->name('akun.edit');
Route::delete('/akunpengguna/{id}', [UsersController::class, 'destroy'])->name('akun.destroy');
Route::patch('/akunpengguna/{id}', [UsersController::class, 'update'])->name('akun.update');

// ! CRUD MATERI
Route::get('/datamateri', [MaterialsController::class, 'index'])->name('datamateri');
Route::post('/materials', [MaterialsController::class, 'store'])->name('materials.store');
Route::get('/datamateri/{materi}', [MaterialsController::class, 'show'])->name('materials.show');
Route::patch('/datamateri/{materi}', [MaterialsController::class, 'update'])->name('materials.update');
Route::delete('/datamateri/{materi}', [MaterialsController::class, 'destroy'])->name('materials.destroy');
Route::post('/datamateri/{materi}', [MaterialsController::class, 'updateDuration']);

// ! CRUD TEKA-TEKI
Route::get('/datatekateki', [TekatekisController::class, 'index'])->name('datatekateki');
Route::post('/tekatekis', [TekatekisController::class, 'store'])->name('tekatekis.store');
Route::get('/datatekateki/{question}', [TekatekisController::class, 'show'])->name('tekatekis.show');
Route::patch('/datatekateki/{question}', [TekatekisController::class, 'update'])->name('tekatekis.update');
Route::delete('/datatekateki/{question}', [TekatekisController::class, 'destroy'])->name('tekatekis.destroy');

// ! CRUD SISWA
Route::get('/datasiswa', [OrdersController::class, 'siswa'])->name('datasiswa');

// ! CRUD REGISTRASI
Route::get('/login', 'App\Http\Controllers\UsersController@index')->name('loginpage');
Route::post('/register', 'App\Http\Controllers\UsersController@store')->name('register.store');
Route::post('/loginuser', 'App\Http\Controllers\AuthController@login')->name('login');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

// bermain controller
//Route::get('/bermain', 'App\Http\Controllers\Siswa@bermain');

// sementara
Route::get('/sementara','App\Http\Controllers\Ortu@index')->name('ortu.index');
// show raport
Route::get('/raport/{nama}', 'App\Http\Controllers\Ortu@show')->name('raport');

// route to profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::post('/verification', 'App\Http\Controllers\Siswa@sendverif')->name('email.send');
Route::get('/verify/{code}/{email}', 'App\Http\Controllers\Siswa@verify')->name('email.verify');
Route::delete('/delete/email', 'App\Http\Controllers\Siswa@deleteEmail')->name('email.delete');