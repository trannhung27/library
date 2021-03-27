<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Like;
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

    public function like(Request $request)
    {
        $idbook = $request->input('idbook') ;
        $iduser = $request->input('iduser');
        // $data = new Like();
        // $data->idbook = $idbook;
        // $data->iduser = $iduser;
        // $data->save();
    }

    public function addUser(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password =bcrypt($request->input('password'));

        $data = array('name'=>$name, "phone"=>$phone, "email"=>$email, "password"=>$password);
        $insertid = DB::table('users')->insertGetId($data);
        return $insertid;
    }

}

