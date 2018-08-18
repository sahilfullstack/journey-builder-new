<?php

namespace App\Http\Requests\Path;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Http\FormRequest;
use App\Jobs\Journey\GetNextQuestion;

use App\Models\Path;

class ValidatePathResponseRequest extends FormRequest
{
    use DispatchesJobs;

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
        $node = $this->instance()->input('node');

        $nodeType = studly_case($node->linker['type']);

        return app("App\\Services\\Nodes\\{$nodeType}Node")->getRules();
    }
}
