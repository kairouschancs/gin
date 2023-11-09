<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Shop_HallRequest extends FormRequest
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
            //郵便番号
            "develop_postal_code" => "nullable|string|max:64",
            //住所
            "develop_address" => "nullable|string|max:64",
            //建物名
            "develop_building" => "nullable|string|max:64",
            //建物記号
            "develop_symbol" => "nullable|string|max:64",
            //建物略称
            "develop_name" => "nullable|string|max:64",
            //Weather_Information_id => Relation_id
            "weather_information_id" => "required|integer",
        ];
    }
}
