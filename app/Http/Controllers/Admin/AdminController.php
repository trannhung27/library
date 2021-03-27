<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function home()
    {
        return view("admin.home");
    }

    public function addUser(Request $request){

        // $name = $request->input('name');
        // $email = $request->input('email');
        // $phone = $request->input('phone');
        // $password =bcrypt($request->input('password'));
        // $doituong = "reader";

        // $data = array('name'=>$name, "phone"=>$phone, "email"=>$email, "password"=>$password, "doituong"=>$doituong);
        // $insertid = DB::table('users')->insertGetId($data);
        // return $insertid;
        $iduser = $request->input('iduser');
        $oldpass = $request->input('oldpass');
        $newpass = $request->input('newpass');

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


    public function hu($id)
    {
        return view("admin.user");
    }

    public function hahah(Request $request,$id){
        // $user = new User();
        // $user->name = $request->tendangnhap;
        // $user->email= $request->email;
        // // $user->phone = $request->sodienthoai;
        // // $user->password = bcrypt($request->matkhau);
        // $user->doituong = 'reader';

        $user = User::find($id);
        if (Hash::check($request->old_password, $user->password)) { 
            $user->password = bcrypt($request->matkhau);
            $user->save();
        }
    }

    
}

