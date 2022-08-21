<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\thietbiRequest;
use App\Models\thietbi;
use Illuminate\Http\Request;

class ThietbiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewthietbi()
    {
        return view('admin.page.thietbi.taomoi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postthietbi(thietbiRequest $request)
    {
        $data = $request->all();
        thietbi::create($data);
        toastr()->success('Tạo Mới Thành Công !', 'Thông Báo');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\thietbi  $thietbi
     * @return \Illuminate\Http\Response
     */
    public function show(thietbi $thietbi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thietbi  $thietbi
     * @return \Illuminate\Http\Response
     */
    public function edit(thietbi $thietbi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\thietbi  $thietbi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, thietbi $thietbi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\thietbi  $thietbi
     * @return \Illuminate\Http\Response
     */
    public function destroy(thietbi $thietbi)
    {
        //
    }
}
