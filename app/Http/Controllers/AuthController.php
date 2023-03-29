<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {

    }

    public function login(Request $request)
    {
        return view('admin.loginuser');
    }
}
