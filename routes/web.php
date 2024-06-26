<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;

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

//Route::get('/welcome', function () {
//return view('welcome');
//});

//Route::get('/user/{id}', function ($id) {
//return 'User dengan ID ' . $id;
//});

//Route::prefix('admin')->group(function () {
//    Route::get('/dashboard', function () {
//        return 'Admin Dashboard';
//    });

//    Route::get('/users', function () {
//        return 'Admin Users';
//    });
//});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//    return view('list_barang', compact('id', 'nama'));
// });

//Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/landing', [LandingController::class, 'index']);

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
});

Route::get('/admin/kapal', function () {
    return view('/admin/kapal');
});

Route::get('/admin/pelabuhan', function () {
    return view('/admin/pelabuhan');
});

Route::get('/admin/rute', function () {
    return view('/admin/rute');
});

Route::get('/admin/tiket', function () {
    return view('/admin/tiket');
});

Route::get('/admin/pengguna', function () {
    return view('/admin/pengguna');
});

Route::get('/admin/pesanan', function () {
    return view('/admin/pesanan');
});

Route::get('/admin/tambahkapal', function () {
    return view('/admin/formulir/tambahkapal');
});

Route::get('/admin/tambahrute', function () {
    return view('/admin/formulir/tambahrute');
});

Route::get('/admin/tambahtiket', function () {
    return view('/admin/formulir/tambahtiket');
});

Route::get('/admin/tambahpelabuhan', function () {
    return view('/admin/formulir/tambahpelabuhan');
});

Route::get('/admin/tambahpengguna', function () {
    return view('/admin/formulir/tambahpengguna');
});

Route::get('/list_barang', [ListBarangController::class, 'tampilkan']);

//Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
