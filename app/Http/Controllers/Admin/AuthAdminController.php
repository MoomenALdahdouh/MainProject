<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthAdminController extends Controller
{
    public function index()
    {
        return view('admin.auth.sign-in');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->back();
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:admins,email',
            'password' => 'required:admins,password|min:8',
        ]);
        if ($validator->fails())
            return response()->json(['errors' => $validator->errors()->toArray()],400);
        $auth = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
        if ($auth)
            return response()->json(['success' => Auth::guard('admin')->user()]);
        return response()->json(['errors' => ['password' => 'Password not correct']],400);
    }

    public function login1(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:admins,email',
            'password' => 'required:admins,password|min:8',
        ]);
        if ($validator->fails())
            return redirect()->back()->withInput($request->all())->withErrors($validator->errors()->toArray(), 'validator');
        $auth = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
        if ($auth)
            return redirect()->back();
        return redirect()->back()->withInput($request->all())->withErrors(['password' => 'Password not correct'], 'validator');
    }
}
