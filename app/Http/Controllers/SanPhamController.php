<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SanPham\SanPhamRequest;
use App\Models\SanPham;
use App\Models\thietbi;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function create()
    {
        $thietbi_id = thietbi::all();
        return view('admin.page.sanpham.taomoi', compact('thietbi_id'));
    }
    public function store(SanPhamRequest $request)
    {
        $data = $request->all();
        SanPham::create($data);
        return response()->json(['status' => true]);
    }
    public function index()
    {
        $sanpham = SanPham::join('thietbis','thietbi_id','thietbis.id')
                        ->select('san_phams.*', 'thietbis.tenthietbi as nameThietBi')
                        ->get();
        $thietbi = thietbi::all();
        return view('admin.page.sanpham.danhsach', compact('sanpham','thietbi'));
    }
    public function edit($id)
    {
        $listSanPham = SanPham::find($id);
        if($listSanPham){
            return response()->json(["data" => $listSanPham]);
        }else {
            toastr()->error("thiết bị không tồn tại !");
            return $this->index();
        }
    }
    public function update(SanPhamRequest $request)
    {
        $data = $request->all();
        $thietbi = SanPham::find($request->id);
        $thietbi->update($data);
        return response()->json(['status' => true]);
    }
    public function delete($id){
            $sanpham = SanPham::find($id);
            if($sanpham){
                $sanpham->delete();
                return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }
    }
    public function changeValueView(Request $request){
        $id = $request->id;
        $sanpham = SanPham::find($id);
        if($sanpham){
            $sanpham->is_view = ($sanpham->is_view + 1) % 2;
            $sanpham->save();
            return response()->json(['status' => true, 'is_view' => $sanpham->is_view]);
        } else {
            // Tìm không thấy
            return response()->json(['status' => false]);
        }

    }

}
