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
		// $selectable = array_get($node->linker['selectables'], $response['order']);
		$selectables = $response['selectables'];

		$linker = [
			'type' => $node->linker['type'],
			'to' => $selectables[0]['to'],
			'selectables' => $selectables
		];

		return $linker;
	}

	public function getRules()
	{
		return [
			'response.selectables' => 'required'
		];
	}

	public function evaluateLinker($linker, $scores)
	{
		return $this->operationManager->applyOperations($linker['selectables']['operations'], $scores);
	}
}
