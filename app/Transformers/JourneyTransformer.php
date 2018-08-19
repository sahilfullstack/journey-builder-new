<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Journey;
use League\Fractal;

class JourneyTransformer extends Fractal\TransformerAbstract
{
	public function transform(Journey $journey)
	{
		return [
			'id'          => $journey->id,
			'is_finished' => $journey->is_finished	
		];
	}
}