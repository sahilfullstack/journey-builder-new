<?php

namespace App\Services\Nodes;

use App\Models\Node;

class NumberNode implements QuestionInterface {

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

	public function getRules()
	{
		return [
			'response.response' => 'required'
		];
	}
}
