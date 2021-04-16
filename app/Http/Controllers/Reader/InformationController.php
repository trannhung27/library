<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Like;
use App\Http\Requests;
use App\Models\Borrow_return;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class InformationController extends Controller
{
    public function showInfo()
    {
        return view("reader.information");
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

    public function borrow_return($id)
    {
        $borrow = DB::table('borrow_returns')->join('books','books.id','=','borrow_returns.id_book')->select('borrow_returns.*','books.name')->where('id_reader',$id)->get();
        return response(['response'=>$borrow]);
    }

    public function requiredDate(Request $request)
    {
        $idbook = $request->input('id');
        $date = $request->input('date');
        $borrow = DB::table('borrow_returns')->where('id_book',$idbook)->get();
        foreach($borrow as $row)
        {
            $date = Borrow_return::find($row->id);
            $date->requiredDateReturn = $date;
            $date->save();
        }
    }

    public function favorite_book($id)
    {
        $favorite = DB::table('likes')->join('books','books.id','=','likes.idbook')
        ->select('likes.*','books.name','books.image','books.id')
        ->where('iduser',$id)->get();
        return response(['response'=>$favorite]);
    }

    public function favorite_delete(Request $request)
    {
        $idbook = $request->input('idbook');
        $iduser = $request->input('iduser');
        $favorite = DB::table('likes')->where('iduser',$iduser)->where('idbook',$idbook)->get();
        foreach($favorite as $row)
        {
            $delete = Like::find($row->id);
            $delete->delete();
        }
    }
}


