<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class LogoutController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        return redirect('/index');
    }
}

