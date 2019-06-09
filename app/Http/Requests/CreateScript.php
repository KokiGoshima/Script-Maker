<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateScript extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "title" => 'required|regex:/^[a-zA-Z0-9]+$/'
        ];
    }

    public function messages(){
        return[
            "title.regex" => "日本語が含まれています",
            "title.required" => "タイトルを入力してください"
        ];
    }
}
