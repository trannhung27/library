<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class SignupController extends Controller
{
    function index()
    {
        return view("index");
    }

    public function addUser(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password =bcrypt($request->input('password'));
        $doituong = "reader";

        $user = new User();
        $user->name = $name;
        $user->email= $email;
        $user->phone = $phone;
        $user->password = $password;
        $user->doituong = 'reader';
        $user->save();

        // $data = array('name'=>$name, "phone"=>$phone, "email"=>$email, "password"=>$password, "doituong"=>$doituong);
        // $insertid = DB::table('users')->insertGetId($data);
        // return $insertid;
    }
}

