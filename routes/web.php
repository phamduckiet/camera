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

// Route::get('/detail', function () {
//     return view('client.page.detail');
// });

// Route::get('/', function () {
//     return view('client.page.index');
// });
// Route::get('/aaa', function () {
//     return view('client.page.detail');
// });

Route::get('/admin/dangnhap', [\App\Http\Controllers\TaikhoanadminController::class, 'viewdangnhap'])->name('viewdangnhap');
Route::post('/admin/dangnhap', [\App\Http\Controllers\TaikhoanadminController::class, 'postdangnhap'])->name('postdangnhap');
Route::group(['prefix' => '/admin' ,'middleware' => 'checkAdmin'], function(){

    Route::get('/logout', [\App\Http\Controllers\TaikhoanadminController::class, 'logout']);
    Route::get('/dangkytaikhoan', [\App\Http\Controllers\TaikhoanadminController::class, 'store'])->name('viewdangky');
    Route::post('/dangkytaikhoan', [\App\Http\Controllers\TaikhoanadminController::class, 'post']);

    Route::get('/taomoithietbi', [\App\Http\Controllers\ThietbiController::class, 'viewthietbi'])->name('viewthietbi');
    Route::post('/taomoithietbi', [\App\Http\Controllers\ThietbiController::class, 'postthietbi'])->name('postthietbi');
    Route::get('/danhsachthietbi', [\App\Http\Controllers\ThietbiController::class, 'dsthietbi'])->name('dsthietbi');
    Route::get('/thietbi/edit/{id}', [\App\Http\Controllers\ThietbiController::class, 'edit']);
    Route::post('/thietbi/update/{id}', [\App\Http\Controllers\ThietbiController::class, 'update']);
    Route::get('/thietbi/xoa_thietbi/{id}', [\App\Http\Controllers\ThietbiController::class, 'delete']);

    Route::get('/taomoisanpham', [\App\Http\Controllers\SanPhamController::class, 'create'])->name('taomoisanpham');
    Route::post('/taomoisanpham', [\App\Http\Controllers\SanPhamController::class, 'store']);
    Route::get('/danhsachsanpham', [\App\Http\Controllers\SanPhamController::class, 'index'])->name('danhsachsanpham');
    Route::get('/sanpham/edit/{id}', [\App\Http\Controllers\SanPhamController::class, 'edit']);
    Route::post('/sanpham/update/{id}', [\App\Http\Controllers\SanPhamController::class, 'update']);
    Route::get('/sanpham/delete/{id}', [\App\Http\Controllers\SanPhamController::class, 'delete']);
    Route::post('/changeView', [\App\Http\Controllers\SanPhamController::class, 'changeValueView'])->name('change.View');

    Route::get('/danhsachlapdat', [\App\Http\Controllers\LapDatController::class, 'dslapdat']);
    Route::get('/lapdat/delete/{id}', [\App\Http\Controllers\LapDatController::class, 'destroy']);


});

Route::group(['prefix' => '/'], function(){
    Route::get('', [\App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/sanpham/{id}', [\App\Http\Controllers\HomeController::class, 'detail']);
    Route::get('/lapdat', [\App\Http\Controllers\LapDatController::class, 'index']);
    Route::post('/lapdat', [\App\Http\Controllers\LapDatController::class, 'store'])->name('lapdat');


});
Route::group([], function() {
    Route::get('/index/camera', [\App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/camera/san-pham/{slug}', [\App\Http\Controllers\HomeController::class, 'detail']);
    Route::get('/camera/thiet-bi/{id}', [\App\Http\Controllers\HomeController::class, 'thietbishop']);

});




