<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function redirect()
    {
        $auth = Auth::user()->usertype;
        if($auth === "1") {
            return view('admin.index');
        } else {
            return view('home.index');
        }
    }
}

