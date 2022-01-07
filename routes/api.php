<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->name('api.v1.')->namespace('App\Http\Controllers\Api')->group(function() {
    //登录
    Route::post('login', 'AuthorizationsController@login');

    Route::middleware('jwt.auth')->group(function ($router) {
        //用户登录相关
        Route::prefix('auth')->group(function (){
            //刷新jwt token
            Route::post('refresh', 'AuthorizationsController@refresh');
            //退出登录
            Route::post('logout', 'AuthorizationsController@logout');
        });

        //权限管理
        Route::prefix('permissions')->group(function (){
            //权限列表
            Route::get('getPermissionsTree', 'PermissionsController@getPermissionsTree');
            //查看权限信息
            Route::get('{permission}', 'PermissionsController@index');
            //增加权限
            Route::post('create', 'PermissionsController@store');
            //修改权限
            Route::patch('{permission}', 'PermissionsController@update');
            //删除权限
            Route::delete('{permission}', 'PermissionsController@destroy');
        });
        //角色管理
        Route::prefix('roles')->group(function (){
            //角色列表
            Route::get('getRolesList', 'RolesController@getRolesList');
            //查看角色信息
            Route::get('{role}', 'RolesController@index');
            //增加角色
            Route::post('create', 'RolesController@store');
            //修改角色
            Route::patch('{role}', 'RolesController@update');
            //删除角色
            Route::delete('{role}', 'RolesController@destroy');
        });
    });
});
