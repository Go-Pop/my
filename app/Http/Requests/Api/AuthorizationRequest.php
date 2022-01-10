<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\BaseRequest;

class AuthorizationRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string',
            'password' => 'required|alpha_dash|min:6',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '请填写用户名',
            'password.required' => '请填写密码',
            'password.min' => '密码不少于6位',
        ];
    }
}
