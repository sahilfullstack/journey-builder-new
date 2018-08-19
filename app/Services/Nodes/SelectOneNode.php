<?php

namespace App\Services\Nodes;

use App\Models\Node;

class SelectOneNode implements QuestionInterface {

	protected $operationManager;

	public function __construct(OperationManager $operationManager) {
		$this->operationManager = $operationManager;
	}

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

	public function evaluateLinker($linker, $scores)
	{
		return $this->operationManager->applyOperations($linker['selectables']['operations'], $scores);
	}
}
