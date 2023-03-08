<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAyatRequest extends FormRequest
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
            "number" => 'required|string',
            "text_id" => 'required|string',
            "text_arab" => 'required|string',
            "text_latin" => 'required|string',
            "audios" => 'required|string',
            "kategorie_id" => 'nullable|integer'
        ];
    }
}
