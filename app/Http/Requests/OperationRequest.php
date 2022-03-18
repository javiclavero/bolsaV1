<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperationRequest extends FormRequest
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
             'valor' => 'required',
             'precio' => 'numeric|required',
             'titulos' => 'numeric|required',
             'tipo' => 'required'
         ];
     }
     public function messages() {
         return [
           'valor.required' => 'Selecciona un valor',
           'precio.required' => 'Añade el precio de la acción',
           'precio.numeric' => 'El precio ha de ser numérico',
           'titulos.required' => 'Añade el número de títulos',
           'titulos.numeric' => 'El número de títulos ha de ser numérico',
           'tipo.required' => 'Selecciona el tipo de operación'
         ];
       
     }

}
