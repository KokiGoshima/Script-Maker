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
            "title" => 'required|max:30'
        ];
    }

    public function messages(){
        return[
            "title.max" => "30文字以内で入力してください",
            "title.required" => "タイトルを入力してください"
        ];
    }
}
