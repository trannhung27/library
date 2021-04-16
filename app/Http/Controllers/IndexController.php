<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class IndexController extends Controller
{
    function index()
    {
        $book = DB::table('books')->get();
        return view("index",['book'=>$book]);
    }

    public function book($id)
    {
        $book = DB::table('books')->where('id',$id)->get();
        return view("book", ['book'=>$book]);
    }
}

