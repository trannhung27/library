<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Like;
use App\Models\Card;
use App\Models\Comment;
use App\Models\Chapter;
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


    public function checklike(Request $request)
    {
        $idbook = $request->input('idbook') ;
        $iduser = $request->input('iduser');
        $like = DB::table('likes')->get();
        $idlike ="";
        foreach($like as $row)
        {
            if($row->iduser == $iduser && $row->idbook == $idbook){
                $idlike = $row->id;
                $deleteLike = Like::find($idlike);
                $deleteLike->delete();
                return response()->json([[0]]);
            }
        }
        return response()->json([[1]]);
    }

    public function like(Request $request)
    {
        $idbook = $request->input('idbook') ;
        $iduser = $request->input('iduser');
        $like = DB::table('likes')->get();
        $idlike ="";
        foreach($like as $row)
        {
            if($row->iduser == $iduser && $row->idbook == $idbook){
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
        return response()->json([[1]]);
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
        $time_borrow = $request->input('time_borrow');
        $date_borrow = $request->input('date_borrow');
        $time = explode(" ", $time_borrow);
        $a = Carbon::now('Asia/Ho_Chi_Minh')->addMonths($time[0]);
        $a = explode(" ", $a);
        $b = explode(" ",$book_id);

        $borrow = new Borrow_return();
        $borrow->id_reader = $iduser;
        $borrow->id_book = $b[0];
        $borrow->dateBorrow =$date_borrow;
        $borrow->dateReturn = $a[0];
        $borrow->requiredDateReturn = $a[0];
        $borrow->formMode = 0;
        $borrow->status = "Chưa được duyệt";
        $borrow->save();
    }

    public function check(Request $request){
        $borrow_return = DB::table('borrow_returns')->where('id_book',$id);
        $borrow_return->delete();
    }

    public function listchapter(Request $request){
        $idbook = $request->input('idbook');
        $listchapter = DB::table('chapters')->where('idbook',$idbook)->get();
        return response(['response'=>$listchapter]);
    }

    public function checkrequest(Request $request)
    {
        $idbook = $request->input('idbook') ;
        $iduser = $request->input('iduser');
        $borrow_return = DB::table('borrow_returns')->where('id_book',$idbook)->where('id_reader',$iduser)->count();
        return response()->json([[$borrow_return]]);
    }

    public function unseen_notification(Request $request)
    {
        $iduser = $request->input('iduser');
        $notification = DB::table('borrow_returns')->where('id_reader',$iduser)->where('formMode','1')
        ->join('books', 'borrow_returns.id_book', '=', 'books.id')
        ->select('books.name')
        ->get();
        return response(['response'=>$notification]);
    }

    public function notification(Request $request)
    {
        $iduser = $request->input('iduser');
        $notification = DB::table('borrow_returns')->where('id_reader',$iduser)->select('id')->get();
        foreach($notification as $row)
        {
            $change_formMode = Borrow_return::find($row->id);
            $change_formMode->formMode = 0;
            $change_formMode->save();
        }
    }
}