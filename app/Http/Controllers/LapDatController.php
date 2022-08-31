<?php

namespace App\Http\Controllers;

use App\Models\LapDat;
use App\Http\Controllers\Controller;
use App\Http\Requests\client\LapDatRequest;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;


class LapDatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.page.lapdat');
    }
    public function chiTiet($slug)
    {
        $i = 0;
        for($i = strlen($slug)-1; $i >= 0; $i--){
            if($slug[$i] == '-'){
                break;
            }
        }
        $id = Str::substr($slug, $i + 1, strlen($slug)- $i);

        // $user = Auth::user();
        // $cart = null;
        // if($user){
        // $cart = Cart::where('type', 0)->where('user_id', $user->id)->get();
        // }

        $data = SanPham::find($id);
        $products = SanPham::all();
        if($data){
            $product = SanPham::where('id', $data->id)->get();
            return view('client.page.detail', compact('product', 'data','products'));
        } else {
            toastr()->error("Sản phẩm không tồn tại");
            return redirect('/');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LapDatRequest $request)
    {
        $data = $request->all();
         LapDat::create($data);
        //  return response()->json(['status' => true]);
        toastr()->success('Đã gửi thông tin thành công');
        return redirect("/lapdat");
    }
    public function dslapdat()
    {

        $lapdat = LapDat::all();
        return view('admin.page.lapdat.danhsachlapdat', compact('lapdat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LapDat  $lapDat
     * @return \Illuminate\Http\Response
     */
    public function show(LapDat $lapDat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LapDat  $lapDat
     * @return \Illuminate\Http\Response
     */
    public function edit(LapDat $lapDat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LapDat  $lapDat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LapDat $lapDat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LapDat  $lapDat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lapdat = LapDat::find($id);
        if($lapdat){
            $lapdat->delete();
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
    }
}
