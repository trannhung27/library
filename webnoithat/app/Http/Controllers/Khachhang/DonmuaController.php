<?php

namespace App\Http\Controllers\Khachhang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonmuaController extends Controller
{
    public function showDonmuaform()
    {
        $products = DB::table('products')->get();
        // return view('user.index', ['users' => $users]);
        return view("khachhang.donmua", ['products' => $products]);
    }
}