<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function view()
    {
        return view('admin.page.sanpham.taomoi');

    }
}
