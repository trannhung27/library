<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Like;
use App\Models\Card;
use App\Models\Comment;
use App\Models\Borrow_return;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;

class BookController extends Controller
{
    public function book($id)
    {
        $book = DB::table('books')->where('id',$id)->get();
        return view("reader.book", ['book'=>$book]);
    }

    public function card(Request $request){
        $iduser = $request->input('iduser');
        $card = DB::table('users')->join('cards','users.id','=','cards.id_reader')->where('id',$iduser)->select('cards.cardNumber')->get();
        return response(['response'=>$card]);
        
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

    public function comment(Request $request){
        $idbook = $request->input('idbook') ;
        $iduser = $request->input('iduser');
        $add_comment = $request->input('add_comment');

        $comment = new Comment();
        $comment->iduser = $iduser;
        $comment->idbook = $idbook;
        $comment->comment = $add_comment;
        $comment->save();
    }

    public function showcomment(Request $request){
        $idbook = $request->input('idbook');
        // $comment = DB::table('comments')->join('users','comments.iduser','=','users.id')->select('comments.*','users.name')->where('idbook',$idbook)->count();
        $comment = DB::table('comments')->join('users','comments.iduser','=','users.id')->select('comments.*','users.name')->where('idbook',$idbook)->get();
        return response(['response'=>$comment]);
        // return response()->json([[$comment]]);
    }

    public function muonsach(Request $request){
        $iduser = $request->input('iduser');
        $name = $request->input('name');
        $card_Number = $request->input('card_Number');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $book_id = $request->input('book_id');
        $date_borrow = $request->input('date_borrow');
        $time_borrow = $request->input('time_borrow');
        $time = explode(" ", $time_borrow);
        $borrow = new Borrow_return();
        $borrow->id_reader = $iduser;
        $borrow->dateBorrow = $date_borrow;
        // $borrow->dateReturn = Carbon::now('Asia/Ho_Chi_Minh')->addMonths($time[0]);
        $a = Carbon::now('Asia/Ho_Chi_Minh')->addMonths($time[0]);
        $a = explode(" ", $a);
        $borrow->dateReturn = $a[0];
        $borrow->requiredDateReturn = $date_borrow;
        $borrow->status = "Chưa được duyệt";
        $borrow->save();
        
    }
}