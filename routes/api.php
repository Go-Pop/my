<?php


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['bindings']
],function($api) {
    $api->group([
        'middleware' => 'api.throttle',
        'limit' => config('api.rate_limits.access.limit'),
        'expires' => config('api.rate_limits.access.expires'),
    ], function ($api) {
        // 游客可以访问的接口
        $api->post('login', 'AuthorizationsController@login');
        // 需要 token 验证的接口
        $api->group(['middleware' => 'jwt.auth'], function($api) {
            //用户登录相关
            $api->group(['prefix' => 'auth'], function($api){
                //刷新jwt token
                $api->post('refresh', 'AuthorizationsController@refresh');
                //退出登录
                $api->post('logout', 'AuthorizationsController@logout');
            });

            //权限管理
            $api->group(['prefix' => 'permissions'], function($api){
                //权限列表
                $api->get('getPermissionsTree', 'PermissionsController@getPermissionsTree');
                //查看权限信息
                $api->get('{permission}', 'PermissionsController@index');
                //增加权限
                $api->post('create', 'PermissionsController@store');
                //修改权限
                $api->patch('{permission}', 'PermissionsController@update');
                //删除权限
                $api->delete('{permission}', 'PermissionsController@destroy');
            });

            //角色管理
            $api->group(['prefix' => 'roles'], function ($api){
                //角色列表
                $api->get('getRolesList', 'RolesController@getRolesList');
                //查看角色信息
                $api->get('{role}', 'RolesController@index');
                //增加角色
                $api->post('create', 'RolesController@store');
                //修改角色
                $api->patch('{role}', 'RolesController@update');
                //删除角色
                $api->delete('{role}', 'RolesController@destroy');
            });
        });
    });
});
