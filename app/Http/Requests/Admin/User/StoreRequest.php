<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            //
            'name' => 'required', // Name Không Được Rỗng
            'password' => 'required|confirmed|min:6', // Pass Không Rỗng & Phải Trùng && Giới Hạn ít nhất 6 ký tự
            'email' => 'required|unique:users,email', // Email Không Rỗng & Độc Nhất 
            'image' =>'required'
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
            'image'=>'Image can not be empty'
        ];
    }
}
