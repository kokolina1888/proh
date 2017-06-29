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
             'fname'=> 'required|alpha|min:3', 
             'lname'=> 'required|alpha|min:3', 
             'email'=> 'required|email|unique:users',
             //MAKE IT UNIQUE IN FEMAIL COLUMN
             'femail'=>'nullable|email'
             ];
    }

   
     /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
        'fname.required' => 'Моля, въведете име!',
        'lname.required' => 'Моля, въведете фамилия!',
        'email.required'    => 'Моля, въведете e-mail!',
        'fname.alpha'       => 'Въведеното име трябва да съдържа само букви!',
        'lname.alpha'       => 'Въведената фамилия трябва да съдържа само букви!',
        'fname.min'       => 'Въведеното име трябва да съдържа поне три букви!',
        'lname.min'       => 'Въведената фамилия трябва да съдържа поне три букви!',
        'email.email'       => 'Моля, въведете валиден e-mail!',        
        'femail.email'       => 'Моля, въведете валиден e-mail!', 
        'email.unique'    => 'Вече има потребител с такъв email!',

        ];
    }
}
