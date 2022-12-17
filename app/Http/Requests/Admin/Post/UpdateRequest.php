<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'name' => 'required',
            'password' => 'required|confirmed|min:6',
            'email' => 'required|unique:users,email,'.$this->route('id'),
            
        ];
    }

    /**
     * Show message validation form
     *
     * @return array<string, mixed>
     */
    public function messages () 
    {
        return [
            //
            'name.required' => 'Please enter username !',

            'password.required'=> 'Plese enter user password !',
            'password.confirmed'=> 'Wrong password !',

            'email.required' => 'Please enter email !',
            'email.unique'=>'Email user already exists !',
        ];
    }
}
