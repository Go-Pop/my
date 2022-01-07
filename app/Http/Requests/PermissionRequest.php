<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class PermissionRequest extends BaseRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        switch($this->method())
        {

            case 'POST':
            {// CREATE
                return [
                    'name' => 'required|unique:permissions',
                    'uri' => 'required|unique:permissions',
                ];
            }
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'unique:permissions',
                    'uri' => 'unique:permissions',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            }
        }
    }

    public function messages()
    {
        return [
            'name.required' => '请填写权限名称',
            'name.unique' => '权限名称已存在',
            'uri.required' => '请填写权限路由',
            'uri.unique' => '权限路由已存在',
        ];
    }
}
