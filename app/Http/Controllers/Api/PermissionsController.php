<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Permission as SysPermission;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\Api\PermissionRequest;

class PermissionsController extends Controller
{
    // 获取权限列表.
    public function getPermissionsTree(Request $request)
    {
        return SysPermission::where('guard_name', 'api')->where('pid', $request->pid ?? 0)->with('allChildrenPermissions')->get();
    }
    //权限信息
    public function index(Permission $permission){
        return $permission;
    }
    //新建权限
    public function store(PermissionRequest $request, Permission $permission){
        $permission->fill($request->all());
        $permission->guard_name = 'api';
        $permission->pid = $request->pid ?? 0;
        $permission->save();
    }

    //修改权限
    public function update(PermissionRequest $request, Permission $permission){
        $permission->update($request->all());
    }

    //删除权限
    public function destroy(Permission $permission){
        $permission->delete();
    }
}
