<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\WorkingHourController;

class WorkingHourRequest extends FormRequest
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
            //業態ID
            "id" => "nullable|integer",
            //業態記号
            "shop_type_symbol" => 'required|string|max:64',
            //オープン準備
            "opening_work" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //仕込み
            "Preparation" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //納金
            "payment" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //発注
            "order_work" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //4S・プレクロ
            "4S_Pre_closing" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //閉店作業
            "closing_work" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //店長ワーク
            "manager_work" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //トレーニング
            "training" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //Mt
            "appointment" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //700万円以上
            "seven_million_over" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //1,000万円以上
            "ten_million_over" => "nullable|numeric|regex:/\A\d{0,1}(\.\d{0,1})?\z/",
            //人時売上係数
            "Person_hour_sales" => "nullable|integer",
            //最低営業人員
            "Minimum_sales_staff" => "nullable|integer",
        ];
    }
}
