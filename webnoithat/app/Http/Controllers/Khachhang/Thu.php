<?php

namespace App\Http\Controllers\Khachhang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class Thu extends Controller
{
    function index()
    {
        $products = DB::table('products')->where('id',1)->get();
        $comments = DB::table('comments')->where('postid',1)->get();
        return view("khachhang.thu",['products' => $products,'comments' => $comments]);
    }

    function load_data(Request $request)
    {
        $id = $request->get('name');
        $comments = DB::table('comments')->where('id',$id)->get();
        return response(['data'=>$comments]);
    }

    function insert_data(Request $request)
    {

        // $name = $request->input('name');
        // $username = $request->input('username');
        // $email = $request->input('email');

        $comment = new Comment();
        $comment->userid = 1;
        $comment->postid = 1;
        $comment->comment = $request->input('name');
        $hh= $comment->comment;
        if($hh!=''){
            echo "haha";
        }
        else{
            $comment->save();
        return response()->json($comment);
        }
    }

    // function th()
    // {
    //     $products = DB::table('products')->where('id',1)->get();
    //     $comments = DB::table('comments')->where('postid',1)->get();
    //     return view("thu",['products' => $products,'comments' => $comments]);
    // }
    
}



