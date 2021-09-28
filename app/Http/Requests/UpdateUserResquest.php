<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserResquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ];
    }
    public function message()
    {
        return [
          'name.required'=>'Không được để trống',
            'email.required'=>'Không được để trống',
            'email.email'=>'Không đúng định dạng',
            'phone.required'=>'Không được để trống',
            'address.required'=>'Không được để trống',
        ];
    }
}
