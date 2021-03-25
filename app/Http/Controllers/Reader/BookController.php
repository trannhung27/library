<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class BookController extends Controller
{
    public function book($id)
    {
        $book = DB::table('books')->where('id',$id)->get();
        return view("reader.book", ['book'=>$book]);
    }
}

