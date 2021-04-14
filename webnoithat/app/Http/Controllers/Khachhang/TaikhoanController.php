<?php

namespace App\Http\Controllers\Khachhang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class TaikhoanController extends Controller
{
    public function showTaikhoanform()
    {
        return view("khachhang.taikhoan");
        // return view("layout.sidebar");
    }
}