<?php

namespace App\Http\Controllers\Khachhang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ThongbaoController extends Controller
{
    public function showThongbaoform()
    {
        return view("khachhang.thongbao");
    }
}