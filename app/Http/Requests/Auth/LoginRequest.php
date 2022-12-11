<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
    public function rules() // Các Quy Tắc - Nếu Gặp Lỗi Truy Cập Trong Rules Sẽ Show Lỗi dưới hàm message 
    {
        return [
            //
           
            'email' => 'required|exists:users,email', // Email Không Rỗng & Có Tồn Tại Trong DB hay không 
            'password' => 'required', // Pass Không Rỗng & Phải Trùng && Giới Hạn ít nhất 6 ký tự
        ];
    }

    /**
     * Show message validation form
     *
     * @return array<string, mixed>
     */
    public function messages ()  // Tuy chinh phan show Lỗi hàm flash Message
    {
        return [
            //
        
            'email.required' => 'Please Enter Your Email !',
            'email.exists' => 'Email Does Not Exists !',

            'password.required'=> 'Plese Enter Your Password !',
        ];
    }
}
