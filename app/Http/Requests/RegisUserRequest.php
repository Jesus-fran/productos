<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;

class RegisUserRequest extends FormRequest
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
            'user' => 'required|min:4|max:20|regex:/^[a-zA-Z\sñ]+$/',
            'email' => 'required|email||min:5|max:50',
            'password' => ['required','max:30', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            // 'perms' => 'required',
        ];
    }

    public function messages(){
        return [
            'user.required' => 'El campo nombre es obligatorio',
            'user.min' => 'El campo nombre debe contener al menos 4 caracteres.',
            'user.max' => 'El campo nombre no debe contener más de 20 caracteres.',
            'email.required' => 'El campo correo es obligatorio',
            'email.email' => 'Debe ser de tipo correo.',
            'email.min' => 'Debe ser minimo 5 caracteres.',
            'email.max' => 'Debe ser máximo 50 caracteres.',
            'password.required'  => 'El campo contraseña es obligatorio',
            'password.min' => 'La contraseña debe contener al menos 8 caracteres.',
            'password.max' => 'La contraseña no debe contener más de 30 caracteres.',
            'password.required' => 'El campo contraseña es obligatorio',
            'password.mixedCase' => 'El campo contraseña debe tener mayusculas y minusculas',
            'password.numbers' => 'El campo contraseña debe tener un número',
            'password.numbers' => 'El campo contraseña debe tener un simbolo',
            // 'pass_2.min' => 'El campo nombre debe contener al menos 8 caracteres.',
            // 'pass_2.max' => 'El campo nombre no debe contener más de 30 caracteres.',
            // 'pass_2.same' => 'Las contraseñas deben coincidir.',
            // 'perms.required' => 'Acepte los terminos para continuar',
        ];
    }
}
