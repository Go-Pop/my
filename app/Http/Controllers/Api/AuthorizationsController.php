<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\AuthorizationRequest;

class AuthorizationsController extends Controller
{
    //登录
    public function login(AuthorizationRequest $request){
        $credentials = $request->only('username', 'password');
        //验证密码是否正确
        if (!$token = \Auth::guard('api')->attempt($credentials)) {
            return response()->json([
                'message' => '账号密码错误',
            ])->setStatusCode(403);
        }

        return $this->respondWithToken($token);
    }
    //登出
    public function logout(){
        auth('api')->logout();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
    //刷新token
    public function refresh(){
        return $this->respondWithToken(auth('api')->refresh());
    }
    //返回token
    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60 * 24 * 365,
        ]);
    }
}
