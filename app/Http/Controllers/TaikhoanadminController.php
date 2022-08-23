<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\dangnhapRequest;
use App\Http\Requests\Admin\dankyrequest;
use App\Models\taikhoanadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TaikhoanadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        toastr()->info('Bạn đã đăng xuất khỏi hệ thống!', 'Thông Báo');
        return redirect()->route('viewdangnhap');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewdangnhap()
    {
        return view('admin.page.login.dangnhap');
    }
    public function postdangnhap(dangnhapRequest $request)
    {
        $data = $request->only('username', 'password');
        $admin = Auth::guard('taikhoanadmin')->attempt($data);
        if($admin){
                toastr()->success('Bạn đã nhập hệ thống thành công!', 'Thông Báo');
                return redirect()->route('viewthietbi');
            } else {
            toastr()->error('Bạn đã nhập sai tài khoản hoặc mật khẩu!');
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return view('admin.page.login.taoadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taikhoanadmin  $taikhoanadmin
     * @return \Illuminate\Http\Response
     */
    public function post(dankyrequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        taikhoanadmin::create($data);
        return response()->json(['data' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\taikhoanadmin  $taikhoanadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(taikhoanadmin $taikhoanadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\taikhoanadmin  $taikhoanadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taikhoanadmin $taikhoanadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taikhoanadmin  $taikhoanadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(taikhoanadmin $taikhoanadmin)
    {
        //
    }
}
