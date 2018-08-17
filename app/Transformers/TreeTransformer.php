<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Tree;
use League\Fractal;

class TreeTransformer extends Fractal\TransformerAbstract
{
	public function transform(Tree $tree)
	{
		return [
			'id'          => $tree->id,
			'name'        => $tree->name,
			'description' => $tree->description			
		];
	}
}