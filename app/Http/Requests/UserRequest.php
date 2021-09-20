<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required',
            'email'=>'required|email'
        ];
    }
    public function masssage()
    {
        return[
          'name.required'=>'không được để trống',
          'phone.required'=>'không được để trống',
          'address.required'=>'không được để trống',
          'password.required'=>'không được để trống',
          'email.required'=>'không được để trống',
            'email.email'=>'không đúng định dạng'
        ];
    }
}
