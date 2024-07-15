<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class DoceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => "required|min:4",
            'preco' => "required",
            'qtd_disponivel' => 'required|integer|min:1',
            'tipo_qtd' => 'required|in:kg,g,und,litro',
            'categoria_id' => 'required|exists:categorias,id'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => "O nome é obrigatorio!",
            'nome.min' => "O nome deve ter no minimo 4 caracteres",
            'preco.required' => 'O preço é obrigatório',
            'qtd_disponivel.required' => "A quantidade disponivel é obrigatoria",
            'qtd_disponivel.integer' => 'A quantidade precisa ser um inteiro',
            'qtd_disponivel.min' => 'A quantidade minima precisa ser 1',
            'tipo_qtd.required' => 'O tipo é obrigatório',
            'tipo_qtd.in' => 'O tipo de quantidade precisa ser um desses:kg,g,und,litro',
            'categoria_id.required' => "A categoria é obrigatória",
            'categoria_id.exists' => 'Essa categoria não existe no banco de dados'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        throw new HttpResponseException(
            response()->json([
                'message' => "Os dados fornecidos são invalidos",
                "erros" => $errors
            ], 422)
        );
    }
}
