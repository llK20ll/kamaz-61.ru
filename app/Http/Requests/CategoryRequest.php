<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\FuncCall;

class CategoryRequest extends FormRequest
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
        $rules = [
            'code' => 'required|min:3|max:255|unique:categories,code',
            'title' => 'required|min:3|max:255',
        ];

        if($this->route()->named('categories.update')){
            $rules['code'] .= ',' . $this->route()->parameter('category')->id;
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения',
            'min' => 'Поле должно иметь не менее :min символов',
            'code.unique' => 'Такой код уже есть. Придумайте другой код'
        ];
    }
}
