<?php

namespace App\Http\Controllers\Reader;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
    {
        return view("reader.home");
    }
}

