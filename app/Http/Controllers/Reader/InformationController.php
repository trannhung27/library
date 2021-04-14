<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

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
}


