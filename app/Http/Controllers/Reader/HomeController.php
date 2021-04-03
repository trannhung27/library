<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
    {
        $book = DB::table('books')->get();
        return view("reader.home",['book'=>$book]);
    }

    public function thu()
    {
        $book = DB::table('books')->get();
        return view("reader.thu",['book'=>$book]);
    }

    public function search(Request $request){
        $a = "";
        $input_search = $request->input('input_search');
        $category = $request->input('category');
        $book = DB::table('books')->where('name','like','%'.$input_search.'%')->get();
        return response(['response'=>$book]);
        // foreach($book as $row)
        // {
        //     $a = $row->name;
        // }
        // return response()->json([[$a]]);
    }
}


