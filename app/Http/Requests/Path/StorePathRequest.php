<?php

namespace App\Http\Requests\Path;

use Illuminate\Foundation\Http\FormRequest;

class StorePathRequest extends FormRequest
{
    /**
     * Determine if the Path is authorized to make this request.
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
            'response' => 'required'
       ];
    }
}
