<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAyatRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "number" => 'nullable|string',
            "text_id" => 'nullable|string',
            "text_arab" => 'nullable|string',
            "text_latin" => 'nullable|string',
            "audios" => 'nullable|string',
            "kategorie_id" => 'nullable|integer'
        ];
    }
}
