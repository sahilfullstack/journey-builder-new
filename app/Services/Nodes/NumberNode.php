<?php

namespace App\Services\Nodes;

use App\Models\Node;

class NumberNode {

	public function __construct() {}

	public function prepareLinkerForPath(Node $node, Array $response)
	{
		$linker = [
			'type'     => $node->linker['type'],
			'to'       => $node->linker['to'],
			'response' => $response['response']
		];

		return $linker;	
	}
}
