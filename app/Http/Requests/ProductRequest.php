<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'model' => 'required|min:3|MAX:255',
            'price' => 'required|numeric|min:1',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения',
            'min' => 'Поле должно иметь не менее :min символов'
        ];
    }
}
