<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
    /**
     * validate验证失败模板
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {
        $message = '';
        foreach (json_decode(json_encode($validator->errors()),1) as $error){
            $message = $error[0];
            break;
        }
        throw (new HttpResponseException(response()->json([
            'code' => 400,
            'msg'  => $message,
            'data' => []
        ])));
    }
}
