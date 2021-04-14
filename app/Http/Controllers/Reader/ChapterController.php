<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ChapterController extends Controller
{
    public function showChapter($id){
        $chapter = DB::table('chapters')->where('id',$id)->get();
        return view("reader.chapter",['chapter'=>$chapter]);
    }

    public function chapter_content(Request $request)
    {
        $id = $request->input('id_chapter') ;
        $chapter_content = DB::table('chapters')->where('id',$id)->get();
        return response(['response'=>$chapter_content]);
    }
}