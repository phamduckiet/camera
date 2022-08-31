<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GioHang;
use App\Models\SanPham;
use App\Models\thietbi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){
        $sanpham = SanPham::join('thietbis', 'thietbi_id', 'thietbis.id')
        ->select('san_phams.*', 'thietbis.tenthietbi as nameThietBi')
        ->get();
        return view('client.page.index', compact('sanpham'));
    }
    public function detail($id)
    {
        dd($id);
        // $i = 0;
        // for($i = strlen($slug)-1; $i >= 0; $i--){
        //     if($slug[$i] == '-'){
        //         break;
        //     }
        // }
        // $id = Str::substr($slug, $i + 1, strlen($slug)- $i);

        // $cart = null;
        // if($user){
        // $cart = Cart::where('type', 0)->where('user_id', $user->id)->get();
        // }
        //  $cart = GioHang::where('type', 0)->get();

        // $data = SanPham::find($id);
        // $sanphams = SanPham::all();
        // if($data){
        //     $sanpham = SanPham::where('id', $data->id)->get();
        //     return view('client.page.detail', compact('sanpham', 'data','sanphams'));
        // } else {
        //     toastr()->error("Sản phẩm không tồn tại");
        //     return redirect('/');
        // }
    }

}
