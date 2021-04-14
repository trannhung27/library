<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;

class SigninController extends Controller
{
    public function showSigninform()
    {
        return view("signin");
    }

    public function insertsignin(Request $request)
    {
        $thongtin = new User();
        // $thongtin = $request->validate([
        //     'hoten' => 'required|min:1',
        //     'sodienthoai' => 'required|min:1',
        //     'email' => 'required|min:1',
        //     'socmnd' => 'required|min:1',
        //     'diachi' => 'required|min:1',
        //     'name' => 'required|min:1',
        //     'password' => 'required|min:1',
        // ]);

        // $this->validate($request, array(
        //     'hoten' => 'required|min:1',
        //     'sodienthoai' => 'required|min:1',
        //     'email' => 'required|min:1',
        //     'socmnd' => 'required|min:1',
        //     'diachi' => 'required|min:1',
        //     'name' => 'required|min:1',
        //     'password' => 'required|min:1',
        // ));


        // $this->validate($request, array(
            
        // ));


        $thongtin->fullname = $request->fullname;
        $thongtin->phone = $request->phone;
        $thongtin->email = $request->email;
        $thongtin->socmnd = $request->socmnd;
        $thongtin->address = $request->address;
        $thongtin->name = $request->name;
        $thongtin->password = bcrypt($request->password);
        $thongtin->doituong = "Khachhang";
       
        // $thongtin->duyettaikhoan = "Chưa được duyệt";
        // $thongtin->password = bcrypt($request->password);
        $thongtin->save();
        return redirect('/khachhang/home');
    }
}
