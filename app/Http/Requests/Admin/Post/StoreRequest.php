<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required', // Name Không Được Rỗng
            //'content' => 'required',
            'bri_id' => 'required',
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
            'title.required' => 'Please enter title !',
            //'content.required'=> 'Plese enter content !',
            'bri_id.required'=> 'Please choose the bridge !',
           
        ];
    }
}
