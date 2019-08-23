<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitBoardRequest extends FormRequest
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
            'title' => [
                'required', 'max:191'
            ],
            'email' => [
                'required'
            ],
            'short_description' => [
                'required','string'
            ],
            'additional_information' => [
                'required','string'
            ],
            'demo_url' => [
                'required','url'
            ],
            'source_code_url' => [
                'required','url'
            ],
            'social_network_url' => [
                'required','url'
            ],
        ];
    }
}
