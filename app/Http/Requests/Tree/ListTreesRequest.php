<?php

namespace App\Http\Requests\Tree;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Tree;

class ListTreesRequest extends FormRequest
{
    /**
     * Determine if the Tree is authorized to make this request.
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
        return [];
    }
}
