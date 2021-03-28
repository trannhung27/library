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
        return view("admin.homeAdmin");
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
    
    public function thu()
    {
        return view("admin.thu");
    }
}

