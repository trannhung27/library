<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $data = array("email"=>$email, "password"=>$password);
        
        if (Auth::attempt(['email' => $email, 'password' => $password, 'doituong'=>"reader"])) {
            // nếu đăng nhập thành công thì chuyển hướng về home
            return response()->json([[1]]);
        }
        else if(Auth::attempt(['email' => $email, 'password' => $password, 'doituong'=>"admin"])) {
            // nếu đăng nhập thành công thì chuyển hướng về home
            return response()->json([[2]]);
        }
        else{
            return response()->json([[0]]);
        }
    }
}

