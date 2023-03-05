<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSurahRequest extends FormRequest
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
            "number" => 'nullable|integer',
            "name_arab" => 'nullable|string',
            "name_latin" => 'nullable|string',
            "place" => 'nullable|string',
            "translate" => 'nullable|string',
            "ayat_count" => 'nullable|integer',
            "description" => 'nullable|string',
        ];
    }
}
