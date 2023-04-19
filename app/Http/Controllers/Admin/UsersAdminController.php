<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UsersAdminController extends Controller
{
    public function index()
    {
        $roles = Role::query()->get();
        return view('admin.users.users.list', compact('roles'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|unique:admins,email',
                'mobile' => 'required|unique:admins,mobile',
                'role_name' => 'required',
                'password' => 'required|string|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
                'password_confirmation' => 'required|same:password'
            ]);
        if ($validator->fails())
            return response()->json(['errors' => $validator->errors()->toArray()], 400);
        //dd($request->all());
        $user = new Admin();
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole($request->role_name);
        return response()->json(['success' => 'success']);
    }


}
