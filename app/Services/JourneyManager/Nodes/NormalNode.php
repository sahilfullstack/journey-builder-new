<?php

namespace App\Services\JourneyManager\Nodes;

use App\Models\{Journey, Node, Path};

class NormalNode {

	public function next(Journey $journey, Path $Path)
	{
		return Node::whereTreeId($journey->tree_id)->whereIdentifier($Path['options'][0]['to'])->first();
	}
}
