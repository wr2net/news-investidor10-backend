<?php

namespace App\Investidor10\News\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class NewsRequest
 * @package App\Investidor10\Requests
 */
class NewsRequest extends FormRequest
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
        if (!$this->news) {
            return [
                "category_id" => ['required', 'exists:categories,id'],
                "title" => ['required', 'string'],
                'subtitle' => ['nullable', 'string'],
                "font" => ['required', 'string'],
                "date" => ['required', 'string'],
                "news" => ['required', 'string'],
            ];
        }

        return [
            "category_id" => ['required', 'exists:categories,id'],
            "title" => ['required', 'string'],
            'subtitle' => ['nullable', 'string'],
            "font" => ['required', 'string'],
            "date" => ['required', 'string'],
            "news" => ['required', 'string'],
        ];
    }
}
