<?php

namespace App\Services\Nodes;

use App\Models\Node;

class NumberNode implements QuestionInterface {

	protected $operationManager;

	public function __construct(OperationManager $operationManager) {
		$this->operationManager = $operationManager;
	}

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

	public function evaluateLinker($linker, $scores)
	{
		if(! isset($linker['operations']) or empty($linker['operations'])) return $scores;

		return $this->operationManager->applyOperations($linker['operations'], $scores);
	}
}
