<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SweepstakesStoreRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'number_of_winners' => 'required|numeric',
            'end_date' => 'required|date_format:Y-m-d'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório',
            'date_format' => 'Formato inválido de data',
            'number' => 'Você deve enviar um número'
        ];
    }
}
