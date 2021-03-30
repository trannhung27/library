<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class BooksController extends Controller
{
    public function book()
    {
        $book = DB::table('books')->get();
        return view("reader.books", ['book'=>$book]);
    }
}