<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Models\GioHang;
use App\Models\SanPham;
use App\Models\thietbi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomeController extends Controller
{
=======
use App\Models\Home;
use App\Models\SanPham;
use App\Models\thietbi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
    public function index(){
        $sanpham = SanPham::join('thietbis', 'thietbi_id', 'thietbis.id')
        ->select('san_phams.*', 'thietbis.tenthietbi as nameThietBi')
        ->get();
        return view('client.page.index', compact('sanpham'));
    }
<<<<<<< HEAD
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

=======

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thietbishop($id)
    {
        $data = thietbi::find($id);
        if($data){
            $sanpham = SanPham::where('thietbi_id', $data->id)->get();
            return view('client.page.shopthietbi', compact('sanpham'));
        } else {
            toastr()->warning("Không được sữa hệ thống !");
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {
        return view('client.page.detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
}
