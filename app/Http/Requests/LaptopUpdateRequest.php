<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaptopUpdateRequest extends FormRequest
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
            'No'                    =>      'required|numeric',
            'fk_marca'              =>      'not_in:0',
            'fk_procesador'         =>      'not_in:0',
            'fk_ram'                =>      'not_in:0',
            'fk_hd'                 =>      'not_in:0',
        ];
    }

    public function messages()
    {
        return [
            'No.required'                       =>  'Ingresa el "Número" del computador',
            'No.numeric'                        =>  'El Número del computador no debe contener letras',
            'fk_marca.not_in'                   =>  'Selecciona la "Marca del computador" por favor',
            'fk_procesador.not_in'              =>  'Selecciona la "Marca de Procesador" por favor',
            'fk_ram.not_in'                     =>  'Selecciona la "Cantidad de RAM" por favor',
            'fk_hd.not_in'                      =>  'Selecciona el "Tamaño del HDD" por favor',


        ];
    }
}
