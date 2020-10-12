<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AskQuestionRequest extends FormRequest
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
            'title' => 'required|max:255|min:5',
            'body' => 'required|min:10'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'question title',
            'body' => 'question body'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The question title should not be empty',
            'title.max' => 'The question should be maximum of 255 characters long',
            'title.min' => 'The question should be a minimum of 5 characters long ',
            'body.required' => 'The question body should not be empty',
            'body.min' => 'The question body should be a minimum of 10 characters long'
        ];
    }
}
