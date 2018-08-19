<?php

namespace App\Http\Requests\Journey;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Journey;
use App\Exceptions\InvalidInputException;

class GetNextQuestionRequest extends FormRequest
{
    /**
     * Determine if the Journey is authorized to make this request.
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
        if($this->instance()->route('journey')->finished())
        {
            throw new InvalidInputException("Journey is finished.");
        }
        
        return [];
    }
}
