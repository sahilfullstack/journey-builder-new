<?php

namespace App\Services\Nodes;

use App\Models\Node;

class SelectOneNode {

	public function __construct() {}

	public function prepareLinkerForPath(Node $node, Array $response)
	{
		$linker = [
			'type' => $node->linker['type'],
			'selectables' => array_get($node->linker['selectables'], $response['order'])
		];

		return $linker;
	}
}
