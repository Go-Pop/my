<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RoleRequest;

class RolesController extends Controller
{
    //角色信息
    public function index(Role $role){
        return $role;
    }
    //获取角色列表.
    public function getRolesList()
    {
        return Role::where('guard_name', 'api')->get();
    }

    //新建角色
    public function store(RoleRequest $request, Role $role){
        $role->fill($request->all());
        $role->guard_name = 'api';
        $role->save();
    }

    //修改角色
    public function update(RoleRequest $request, Role $role){
        $role->update($request->all());
    }

    //删除角色
    public function destroy(Role $role){
        $role->delete();
    }
}
