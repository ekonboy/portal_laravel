<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //siempre devuelve false, por lo que podemos montar alguna logica, como si es administrador
        //if ($request->user()->isAdmin())
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

            //esto es un objeto dedicado a la validacion del post
            //aqui podemos hacer alguna verificacion
            if ($this->isMethod('PATCH')){
                return [
                    'title' => ['min:8']
                ];
            }
       
        return [
            'title' => ['required','min:4'],
            'body' => ['required'],
        ];
    }
}
