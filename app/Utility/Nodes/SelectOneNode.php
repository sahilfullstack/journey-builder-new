<?php

namespace App\Utility\Nodes;

use App\Models\Node;
use App\Exceptions\InvalidInputException;
use Illuminate\Validation\ValidationException;

class SelectOneNode implements QuestionInterface {

	protected $operationManager;

	public function __construct(OperationManager $operationManager) {
		$this->operationManager = $operationManager;
	}

	public function prepareLinkerForPath(Node $node, Array $response)
	{
		$keys = array_keys($node->linker['selectables']);

		if( (! is_array($response)) || (count(array_diff($response, $keys)) > 0))
		{
			throw new InvalidInputException("response is invalid");
		}

		$selectables = array_get($node->linker['selectables'], array_values($response)[0]);

		$linker = [
			'type'       => $node->linker['type'],
			'to'         => $selectables['to'],
			'operations' => $selectables['operations'],
			'response'   => $response
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
