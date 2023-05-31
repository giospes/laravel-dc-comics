<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title' => 'required|max:255|min:2',
            'descrition' => 'max:1000',
            'quantity' => 'required|integer|digits_between: 0, 999',
            'price' => 'required|numeric|min:0'    
            
        ];
    }

    public function messages(){
        return[
            'title.required'=>'Il titolo è obbligatorio'
        ];
    }
}
