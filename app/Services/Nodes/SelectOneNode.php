<?php

namespace App\Services\Nodes;

use App\Models\Node;

class SelectOneNode implements QuestionInterface {

	public function __construct() {}

	public function prepareLinkerForPath(Node $node, Array $response)
	{
		$selectable = array_get($node->linker['selectables'], $response['order']);

		$linker = [
			'type' => $node->linker['type'],
			'to' => $selectable['to'],
			'selectables' => $selectable
		];

		return $linker;
	}

	public function getRules()
	{
		return [
			'response.order' => 'required'
		];
	}
}
