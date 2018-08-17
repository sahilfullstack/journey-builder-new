<?php

namespace App\Services\Nodes;

use App\Models\Node;

class SelectMultipleNode {

	public function __construct() {}

	public function prepareLinkerForPath(Node $node, Array $response)
	{
		$selectables = [];

		foreach ($response['orders'] as $key => $order) 
		{
			$selectables[] = array_get($node->linker['selectables'], $order);
		}

		$linker = [
			'type' => $node->linker['type'],
			'to' => $node->linker['to'],
			'operations' => isset($node->linker['operations']) ?: [] ,
			'selectables' => $selectables
		];

		return $linker;	
	}
}
