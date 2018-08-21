<?php

namespace App\Utility\Nodes;

use App\Models\Node;

class SelectManyNode implements QuestionInterface {

	protected $operationManager;

	public function __construct(OperationManager $operationManager) {
		$this->operationManager = $operationManager;
	}
	public function prepareLinkerForPath(Node $node, Array $response)
	{
		$selectables = [];

		foreach ($response as $key => $order) 
		{
			$selectables[] = array_get($node->linker['selectables'], $order+1);
		}

		$linker = [
			'type' => $node->linker['type'],
			'to' => $node->linker['to'],
			'operations' => isset($node->linker['operations']) ?: [] ,
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
		if(! isset($linker['operations']) or empty($linker['operations'])) return $scores;

		return $this->operationManager->applyOperations($linker['operations'], $scores);
	}
}
