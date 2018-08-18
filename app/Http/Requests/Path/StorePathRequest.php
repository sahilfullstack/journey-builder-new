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
        // 1. check validation of node for user here
        // if(is_null($profile = $this->instance()->input('profile')))
        // {
        //     throw new InvalidInputException("Profile field required.");
        // }

       return [
        'response' => 'required'
       ];
    }
}
