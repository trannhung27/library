<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class BookController extends Controller
{
    public function book($id)
    {
        $book = DB::table('books')->where('id',$id)->get();
        return view("reader.book", ['book'=>$book]);
    }

    public function like(Request $request)
    {
        $idbook = $request->input('idbook') ;
        $iduser = $request->input('iduser');
        $like = DB::table('likes')->get();
        $idlike ="";
        foreach($like as $row)
        {
            if($row->iduser == $iduser){
                $idlike = $row->id;
                $deleteLike = Like::find($idlike);
                $deleteLike->delete();
                return response()->json([[0]]);
            }
        }

        $addlike = new Like();
        $addlike->iduser = $iduser;
        $addlike->idbook = $idbook;
        $addlike->save();
    }

    public function showlike(Request $request){
        $idbook = $request->input('idbook') ;
        $iduser = $request->input('iduser');
        $numberLike = DB::table('likes')->where('idbook',$idbook)->count();
        return response()->json([[$numberLike]]);
    }


}

