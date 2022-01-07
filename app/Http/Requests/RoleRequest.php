<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class RoleRequest extends BaseRequest
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
                    'name' => 'required|unique:roles',
                ];
            }
                // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'unique:roles',
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
            'name.required' => '请填写角色名称',
            'name.unique' => '角色名称已存在',
        ];
    }
}
