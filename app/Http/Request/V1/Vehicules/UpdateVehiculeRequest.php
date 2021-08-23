<?php

namespace App\Http\Requests\V1\Vehicules;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehiculeRequest extends FormRequest
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
            'color'=> ['required', 'max:20'],
            'model'=>['required','max:20','max:100'],
            'plate_car'=>['required','max:20','max:100'],
            'type' => ['required', 'max:100'],
            
            
        ];
    }
    public function attributes()
    {
        return [
            'color'=> 'color del vehiculo',
            'model'=>'modelo del vehiculo',
            'plate_car'=>'placa del vehiculo',
            'type' => 'tipo de vehiculo',
        ];
    }
}
