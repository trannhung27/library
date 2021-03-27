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
}

