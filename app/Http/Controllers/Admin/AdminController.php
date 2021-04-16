<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Like;
use App\Models\Book;
use App\Models\Borrow_return;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function home()
    {
        // $info = DB::table('user')
        $reader = DB::table('users')->where('doituong', 'reader')->get();
        return view("admin.homeAdmin",['reader'=>$reader]);
    }

    public function changepass(Request $request){
        $iduser = $request->input('iduser');
        $oldpass = $request->input('oldpass');
        $newpass = $request->input('newpass');
        $user = User::find($iduser);
        if (Hash::check($request->oldpass, $user->password)) { 
            $user->password = bcrypt($newpass);
            $user->save();
            return response()->json([[1]]);
        }
        else{
            return response()->json([[0]]);
        }
    }

    public function changephone(Request $request){
        $iduser = $request->input('iduser');
        $verification = $request->input('verification');
        $newphone = $request->input('newphone');
        $user = User::find($iduser);
        
            $user->phone = $newphone;
            $user->save();   
            return response()->json([[1]]);
        
    }

    public function changeemail(Request $request){
        $iduser = $request->input('iduser');
        $verification_email = $request->input('verification_email');
        $newemail = $request->input('newemail');
        $user = User::find($iduser);
        
            $user->email = $newemail;
            $user->save();   
            return response()->json([[1]]);
        
    }

    //show reader
    public function manage_reader()
    {
        $reader = DB::table('users')->where('doituong', 'reader')->get();
        return response(['response'=>$reader]);
    }

    public function manage_doc(){
        $document = DB::table('books')->get();
        return response(['response'=>$document]);
    }

    public function borrow_return(){
        $borrow = DB::table('borrow_returns')->join('books','books.id','=','borrow_returns.id_book')->select('borrow_returns.*','books.name')->where('status','Chưa được duyệt')->get();
        
        // return response()->json([[$borrow]]);
        return response(['response'=>$borrow]);
    }

    public function duyet(Request $request){
        $id = $request->input('id');
        $duyet = Borrow_return::find($id);
        $duyet->status = "Đã được duyệt";
        $duyet->formMode = "1";
        $duyet->save();
    }

    public function dangmuon(Request $request){
        $borrow = DB::table('borrow_returns')->join('books','books.id','=','borrow_returns.id_book')->select('borrow_returns.*','books.name')->where('status','Đã được duyệt')->get();
        return response(['response'=>$borrow]);
        // return response()->json([[$borrow]]);
    }

    public function delete(Request $request){
        $id = $request->input('id');
        $delete = Borrow_return::find($id);
        $delete->delete();
    }

    public function delete_book(Request $request){
        $id = $request->input('id');
        //Delete book
        $delete_book = Book::find($id);
        $delete_book->delete();
        //delete like book
        $like_book = DB::table('likes')->where('idbook',$id);
        $like_book->delete();
        //delete comment book
        $comment_book = DB::table('comments')->where('idbook',$id);
        $comment_book->delete();
        // delete borrow_return
        $borrow_return = DB::table('borrow_returns')->where('id_book',$id);
        $borrow_return->delete();
        
    }

    public function add_book(Request $request)
    {
        $name = $request->input('name');
        $category = $request->input('category');
        $author = $request->input('author');
        $description = $request->input('description');
        $amount = $request->input('amount');
        $publishYear = $request->input('publishYear');
        $publisher = $request->input('publisher');
        
        
        $add_book = new Book();
        $add_book->name = "a";
        $add_book->publisher = "a";
        $add_book->publishYear = 20;
        $add_book->description = "a";
        $add_book->money = 2000;
        $add_book->category = "a";
        $add_book->author = "a";
        $add_book->amount = 20;


        $file = $request->input('add_image');
        $file1 = $request->file($file);
        // $file1 = $file->getClientOriginalName();
        return response()->json([[$file1]]);

        // if ($request->hasFile('add_image')) {
        //     $file1 = $request->file('add_image');
        //     $file = $file1->getClientOriginalName();
        // }
        // else{
        //     return response()->json([[1]]);
        // }
        // $request->file('add_image')->move('image_book',$file1->getClientOriginalName());
        // $add_book->image = $file1->getClientOriginalName();

        // $hinhthe = $request->file('add_image');
		// $gethinhthe = time().'_'.$hinhthe->getClientOriginalName();
		// $destinationPath = public_path('image_book');
		// $hinhthe->move($destinationPath, $gethinhthe);

        $add_book->image = "aaa";
        $add_book->save();
    }

    public function add_date()
    {
        $add_date = DB::table('borrow_returns')
        ->join('books','books.id','=','borrow_returns.id_book')
        ->select('borrow_returns.*','books.name')
        ->where('dateReturn','!=','requiredDateReturn')->get();
        return response(['response'=>$add_date]);
    }
}



