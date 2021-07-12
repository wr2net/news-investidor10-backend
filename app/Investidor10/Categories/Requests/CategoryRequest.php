<?php

namespace App\Investidor10\Categories\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CategoryRequest
 * @package App\Investidor10\Categories\Requests
 */
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
        if (!$this->category) {
            return [
                "name" => ['required', 'string'],
            ];
        }

        return [
            "name" => ['required', 'string'],
        ];
    }
}
