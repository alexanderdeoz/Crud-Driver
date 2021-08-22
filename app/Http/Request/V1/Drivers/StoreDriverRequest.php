<?php

namespace App\Http\Requests\V1\Drivers;

use Illuminate\Foundation\Http\FormRequest;

class StoreDriverRequest extends FormRequest
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
            'name'=> ['required', 'max:20'],
            'birthday'=>['required','min:2','max:100'],
            'joined_date'=>['required','min:2','max:100'],
            'email' => ['required', 'max:100'],
            'phone' => ['required', 'max:15'],
                        
        ];
    }
    public function attributes()
    {
        return [
            'name'=> 'Nombre',
            'birthday'=>'Fecha de nacimiento',
            'joined_date'=>'fecha de inscripcion',
            'email' => 'correo electronico',
            'phone' => 'Telefono',
                       
            
        ];
    }
}
