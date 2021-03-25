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

        $data = array('name'=>$name, "phone"=>$phone, "email"=>$email, "password"=>$password);
        $insertid = DB::table('users')->insertGetId($data);
        return $insertid;
    }
}

