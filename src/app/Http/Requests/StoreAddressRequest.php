<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
            'cep' => 'bail|required|string',
            'nome' => 'bail|required|string',
            'estado' => 'required|string',
            'cidade' => 'bail|required|string',
            'bairro' => 'bail|required|string',
            'rua' => 'bail|required|string',
            'numero' => 'bail|required|integer'
        ]+ $this->telephones();
    }

    private function telephones() :array
    {
        return [
            'contact' => 'bail|array'
        ];
    }
}
