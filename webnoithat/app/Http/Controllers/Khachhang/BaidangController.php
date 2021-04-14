<?php

namespace App\Http\Controllers\Khachhang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class BaidangController extends Controller
{
    public function showBaidangform()
    {
        $products = DB::table('products')->where('id',1)->get();
        $comments = DB::table('comments')->where('idproduct',1)->get();
        return view("khachhang.sanpham",['products' => $products,'comments' => $comments]);
    }

    public function load_comment(Request $request)
    {
        // $product_id = $request->product_id;
        // $matp = $request->get('name');    
        // $product_id = $request->get('name');  
        // echo $product_id;  
        $comments = DB::table('comments')->get();
        return response(['data'=>$comments]);
    }
}