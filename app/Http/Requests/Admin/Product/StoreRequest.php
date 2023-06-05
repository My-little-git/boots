<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'images' => ['required', 'array'],
            'images.*' => ['required', 'image', 'mimes:jpg,jpeg,png', 'dimensions:min_width=100,min_height=100,max_width=1500,max_height=1500'],
            'name' => ['required', 'min:5', 'max:255'],
            'price' => ['required'],
            'category_id' => ['required'],
            'country_id' => ['required']
        ];
    }
}
