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
}

