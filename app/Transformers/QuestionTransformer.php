<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Node;
use League\Fractal;

class QuestionTransformer extends Fractal\TransformerAbstract
{
	public function transform(Node $node)
	{
		return [
			'id'         => $node->id,
			'tree_id'    => $node->tree_id,
			'identifier' => $node->identifier,
			'data'       => $node->data,
			'linker'     => $node->linker,
		];
	}
}