<?php

namespace App\Utility\Nodes;

use App\Models\Node;

class SelectOneNode implements QuestionInterface {

	protected $operationManager;

	public function __construct(OperationManager $operationManager) {
		$this->operationManager = $operationManager;
	}

	public function prepareLinkerForPath(Node $node, Array $response)
	{
		$selectables = array_get($node->linker['selectables'], array_values($response)[0]+1);

		$linker = [
			'type' => $node->linker['type'],
			'to' => $selectables['to'],
			'selectables' => $selectables
		];

		return $linker;
	}

	public function getRules()
	{
		return [
			'response' => 'required'
		];
	}

	public function evaluateLinker($linker, $scores)
	{
		return $this->operationManager->applyOperations($linker['selectables']['operations'], $scores);
	}
}
