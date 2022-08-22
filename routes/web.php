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
Route::get('/admin/taomoisanpham', [\App\Http\Controllers\SanPhamController::class, 'view']);
Route::get('/admin/danhsachthietbi', [\App\Http\Controllers\ThietbiController::class, 'dsthietbi'])->name('dsthietbi');
Route::get('/admin/thietbi/edit/{id}', [\App\Http\Controllers\ThietbiController::class, 'edit']);
Route::post('/admin/thietbi/update/{id}', [\App\Http\Controllers\ThietbiController::class, 'update']);


