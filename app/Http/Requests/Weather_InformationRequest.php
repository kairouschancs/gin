<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Weather_InformationRequest extends FormRequest
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
            //ID
            "id" => "required|integer",
            //観測地点
            "aria_name" => "nullable|string|max:64",
        ];
    }
}
