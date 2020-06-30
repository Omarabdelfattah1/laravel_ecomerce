<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
            "ar.name" => ["required", "min:3", "max:141", Rule::unique('category_translations', "name")->where('locale', 'ar')->ignore($this->category->id, "category_id") ],
            "en.name" => ["required", "min:3", "max:141", Rule::unique("category_translations", "name")->where('locale', 'en')->ignore($this->category->id, "category_id")],

        ];
    }
}
