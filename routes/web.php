<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("admin.share.master");
});

Route::get('/admin/taomoithietbi', [\App\Http\Controllers\ThietbiController::class, 'viewthietbi'])->name('viewthietbi');
Route::post('/admin/taomoithietbi', [\App\Http\Controllers\ThietbiController::class, 'postthietbi'])->name('postthietbi');
Route::get('/admin/danhsachthietbi', [\App\Http\Controllers\ThietbiController::class, 'dsthietbi'])->name('dsthietbi');
Route::get('/admin/thietbi/edit/{id}', [\App\Http\Controllers\ThietbiController::class, 'edit']);
Route::post('/admin/thietbi/update/{id}', [\App\Http\Controllers\ThietbiController::class, 'update']);

Route::get('/admin/taomoisanpham', [\App\Http\Controllers\SanPhamController::class, 'create']);
Route::post('/admin/taomoisanpham', [\App\Http\Controllers\SanPhamController::class, 'store']);
Route::get('/admin/danhsachsanpham', [\App\Http\Controllers\SanPhamController::class, 'index']);
Route::get('/admin/sanpham/edit/{id}', [\App\Http\Controllers\SanPhamController::class, 'edit']);
Route::post('/admin/sanpham/update/{id}', [\App\Http\Controllers\SanPhamController::class, 'update']);
Route::get('/admin/sanpham/delete/{id}', [\App\Http\Controllers\SanPhamController::class, 'delete']);
Route::post('/changeView', [\App\Http\Controllers\SanPhamController::class, 'changeValueView'])->name('change.View');

