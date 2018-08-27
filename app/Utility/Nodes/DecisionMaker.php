<?php

namespace App\Utility\Nodes;

use App\Models\Node;

class DecisionMaker {

	protected $operationManager;

	public function __construct(OperationManager $operationManager) {
		$this->operationManager = $operationManager;
	}

	public function applyLogic($node, $scores)
	{
		$logics = $node->linker['logic'];

		foreach ($logics as $key => $logic) 
		{
			$tempScores = $scores;

			if(isset($linker['operations']) and ! empty($linker['operations']))
			{
				$tempScores = $this->operationManager->applyOperations($linker['operations'], $scores);
			}

			$isLogicValid = $this->isLogicValid($logic['when'], $tempScores); // return true or false

			if($isLogicValid)
			{
				$node = Node::whereTreeId($node->tree_id)->whereIdentifier($logic['to'])->first();
				break; 
			}
		}

		return $node;
	}

	public function isLogicValid($when, $scores)
	{
		$element = array_keys($when)[0];

		return $this->applyOperations($element, $when[$element], $scores);
	}

	private function applyOperations($element, $operations, $scores)
	{
		$comparisonOperators = ['lte', 'gte'];
		$extendedOperators = ['and', 'or'];
		$stringOperators = ['eq', 'neq'];

		$operators = array_keys($operations);
		$operatorStatus = false;

		if(isset($scores[$element]))
		{
			if(in_array($operators[0], $comparisonOperators))
			{
				switch ($operators[0]) {
					case 'lte':
						$operatorStatus = $scores[$element] <= $operations[$operators[0]];
						break;

					case 'gte':
						$operatorStatus = $scores[$element] >= $operations[$operators[0]];
						break;
					
					default:
						# code...
						break;
				}
			}

			if(in_array($operators[0], $stringOperators))
			{
				switch ($operators[0]) {
					case 'eq':
						$operatorStatus = $scores[$element] == $operations[$operators[0]];
						break;

					case 'neq':
						$operatorStatus = $scores[$element] == $operations[$operators[0]];
						break;
					
					default:
						# code...
						break;
				}
			}
		}

		if(count($operators) > 1)
		{	
			if(in_array($operators[1], $extendedOperators))
			{
				$element = array_keys($operations[$operators[1]])[0];
				switch ($operators[1]) {
					case 'and':
						$operatorStatus = $operatorStatus && $this->applyOperations($element, $operations[$operators[1]][$element], $scores);
						break;

					case 'or':
						$operatorStatus = $operatorStatus or $this->applyOperations($element, $operations[$operators[1]][$element], $scores);
						break;
					
					default:
						# code...
						break;
				}
			}
		}

		return $operatorStatus;
	}
}
