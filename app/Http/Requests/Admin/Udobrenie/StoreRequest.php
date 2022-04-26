<?php

namespace App\Http\Requests\Admin\Udobrenie;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'naimenovanie'=>'required|string',
            'norma_azota'=>'required|numeric|between:0,99.99',
            'norma_fosfor'=>'required|numeric|between:0,99.99',
            'norma_calii'=>'required|numeric|between:0,99.99',
            'grupa_kultur_id'=>'required|integer|exists:grupa_kulturs,id',
            'raion'=>'required|string',
            'stoimosti'=>'required|numeric',
            'opisanie'=>'required|string',
            'naznachenie'=>'required|string',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Acest camp este necesar de completat',
            'title.string' => 'Datetele trebuie sa corespunda unui format string',
            'norma_azota.required' => 'Acest camp este necesar de completat',
            'norma_azota.numeric' => 'Datetele trebuie sa corespunda unui format 0.00 - 99.99',
            'norma_fosfor.required' => 'Acest camp este necesar de completat',
            'norma_fosfor.numeric' => 'Datetele trebuie sa corespunda unui format 0.00 - 99.99',
            'norma_calii.required' => 'Acest camp este necesar de completat',
            'norma_calii.numeric' => 'Datetele trebuie sa corespunda unui format 0.00 - 99.99',
            'raion.required' => 'Acest camp este necesar de completat',
            'raion.string' => 'Datetele trebuie sa corespunda unui format string',
            'stoimosti.required' => 'Acest camp este necesar de completat',
            'stoimosti.numeric' => 'Datetele trebuie sa corespunda unui format format 0.00',
            'opisanie.required' => 'Acest camp este necesar de completat',
            'opisanie.string' => 'Datetele trebuie sa corespunda unui format string',
            'naznachenie.required' => 'Acest camp este necesar de completat',
            'naznachenie.string' => 'Datetele trebuie sa corespunda unui format string',



        ];
    }
}
