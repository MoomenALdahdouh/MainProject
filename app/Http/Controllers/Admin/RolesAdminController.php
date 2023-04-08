<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAdminController extends Controller
{
    public function index()
    {
        $roles = Role::query()->get();
        $permissions = Permission::query()
            ->where('guard_name', 'admin')
            ->where('name', 'not like', '%_create%')
            ->where('name', 'not like', '%_read%')
            ->where('name', 'not like', '%_write%')
            ->where('name', 'not like', '%_delete%')
            ->get();
        return view('admin.users.roles.list', compact('permissions', 'roles'));
    }

    public function show($id)
    {
        return view('admin.users.roles.view');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|unique:roles,name',
                'permissions' => 'required',
            ]);
        //dd($validator->errors());
        if ($validator->fails())
            return response()->json(['errors' => $validator->errors()->toArray()],400);
        $role = Role::query()->create(['name' => $request->name], ['guard_name' => 'admin']);
        $permissions = [];
        foreach ($request->permissions as $name => $sup_permissions) {
            $permission = Permission::query()->where('name', $name)->first();
            $permissions[$permission->id] = $permission->id;
            foreach ($sup_permissions as $k => $permission) {
                $permission = Permission::query()->where('name', $permission)->first();
                $permissions[$permission->id] = $permission->id;
            }
        }
        $role->syncPermissions($permissions);
        $roles = Role::query()->get();
        return response()->json(['success' => view('admin.users.roles.roles_list_item',compact("roles"))->render()]);
        //return view('admin.users.roles.list', compact('roles'));
    }
}
