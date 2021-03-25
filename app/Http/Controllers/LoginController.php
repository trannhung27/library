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
        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // nếu đăng nhập thành công thì chuyển hướng về home
            return response()->json([[1]]);
        }
        else{
            return response()->json([[0]]);
        }
    }
}

