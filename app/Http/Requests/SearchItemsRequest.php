<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchItemsRequest extends FormRequest
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
            'search_data' => [
                'nullable',
                'array'
            ],
            'search_data.name' => [
                'string'
            ],
            'search_data.description' => [
                'string'
            ],
            'search_data.stars' => [
                'integer'
            ],
            'sort' => [
                'nullable',
                'array'
            ],
            'category_id' => [
                'integer',
                'exists:categories,id'
            ]
        ];
    }
}
