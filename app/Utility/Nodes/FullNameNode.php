<?php

namespace App\Utility\Nodes;

use App\Models\Node;

class FullNameNode implements QuestionInterface {

	protected $operationManager;

	public function __construct(OperationManager $operationManager) {
		$this->operationManager = $operationManager;
	}

	public function prepareLinkerForPath(Node $node, $response)
	{
		$linker = [
			'type'     => $node->linker['type'],
			'to'       => $node->linker['to'],
			'operations' => isset($node->linker['operations']) ?: [],
			'response' => $response
		];

		return $linker;	
	}

	public function getRules()
	{
		return [
			'response' => 'required|array'
		];
	}

	public function evaluateLinker($linker, $scores)
	{
		if(! isset($linker['operations']) or empty($linker['operations'])) return $scores;

		return $this->operationManager->applyOperations($linker['operations'], $scores);
	}
}
