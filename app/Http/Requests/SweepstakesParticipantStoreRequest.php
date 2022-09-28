<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SweepstakesParticipantStoreRequest extends FormRequest
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
            "name" => "required",
            "email" => "required|unique:participants,email,NULL,id,sweepstake_id,{$this->sweepstake->id}"
        ];
    }

    public function messages() {
        return [
            'required' => "Este campo é obrigatório",
            'unique' => "Você ja se inscreveu com este e-mail neste sorteio"
        ];
    }
}
