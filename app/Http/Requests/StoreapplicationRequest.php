<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreapplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:25',           
            'pass_info' => 'required|min:10|max:25',
            'pass_info' => 'required|min:10|max:25',
            'telefon' => 'required|min:1|max:10',
            'fakultet' => 'required|min:1|max:25',
            'yonalish' => 'required|min:1|max:25',
            'kurs_nomeri' => 'required|min:1|max:10',
            'guruhi' => 'required|min:3|max:100',
            'mezon' => 'required',

        ];
    }    
    public function messages()    {

        return [

            'name.required' => "Ism sharifingizni yozishingiz kerak",
            'name.min' => "Ism sharifingizni to'liq yozishingiz kerak",             
            'pass_info.required' => '',
            'pass_info.min' => 'Minimal qiymat 10ta belgi',
            'telefon.required' => '',
            'fakultet.required' => '',
            'yonalish.required' => '',
            'kurs_nomeri.required' => '',
            'guruhi.required' => '',
            'mezon.required' => '',  

        ];

    }
}
