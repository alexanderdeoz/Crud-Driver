<?php

namespace App\Http\Requests\V1\Travels;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTravelRequest extends FormRequest
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
            'start_time'=> ['required', 'max:20'],
            'end_time'=>['required','min:2','max:100'],
            
            
        ];
    }
    public function attributes()
    {
        return [
            'start_time'=> 'tiempo de inicio del viaje',
            'end_time'=>'tiempo de fin del viaje', 
        ];
    }
}
