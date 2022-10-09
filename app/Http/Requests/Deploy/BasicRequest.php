<?php

namespace App\Http\Requests\Deploy;

use Illuminate\Foundation\Http\FormRequest;

class BasicRequest extends FormRequest
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
            'url' => ['required', 'url'],
            'name' => ['required', 'string', 'min:3', 'max:191'],
            'logo' => ['required', 'url'],
        ];
    }
}