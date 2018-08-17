<?php

namespace App\Services\JourneyManager\Nodes;

use App\Models\{Journey, Node, Path};

class DeciderNode {

	public function next(Journey $journey, Node $deciderNode)
	{
		// perforem decider operation
		$options = $journey->nodes()->select('options')->get()->toArray();
		$finalScores = $this->processOptions($options);

		$decisions = $deciderNode['decisions'];

		foreach ($decisions as $key => $decision) 
		{
			$decisionScores = $finalScores;

			if($decision['when'] == 'true')
			{
				return $this->getNodeWithOrder($journey, $decision['to']);
			}

			// apply operation
			foreach ($decision['operations'] as $key => $operation) 
			{
				foreach ($operation as $element => $operators) 
				{
					$decisionScores = $this->computeOperations($decisionScores, $element, $operators);
				}
			}

			dd($decisionScores);

			// check conditions
			switch ($decision['when']) 
			{
				case '$true':
					
					break;
				
				default:
					# code...
					break;
			}
		}

		// then return the final node

		// $node = $Path->node;

		// $orderId = $Path['options'][0]['to'];

		// return Node::whereTreeId($journey->tree_id)->whereIdentifier()->first();
	}

		private function processOptions($nodeOptions)
	{
		$scores = [];

		foreach ($nodeOptions as $key => $nodeOption) 
		{
			foreach ($nodeOption['options'] as $key => $option) 
			{
				foreach ($option['operations'] as $key => $operation) 
				{
					foreach ($operation as $element => $operators) 
					{
						$scores = $this->computeOperations($scores, $element, $operators);
					}
				}
			}
		}

		return $scores;
	}

	private function computeOperations($scores, $element, $operators)
	{
		$mathematicalOperators = ["add", "sub", "mul", "div"];
		$stringOperators = ["set", "append", "list"];

		foreach ($operators as $operator => $value) {

			if(in_array($operator, $mathematicalOperators))
			{

				if(! isset($scores[$element]))
				{
					$scores[$element] = 0;
				}

				switch ($operator) {
					case "add":
						$scores[$element] += $value;
						break;
					case 'sub':
						$scores[$element] -= $value;
						break;
					case 'mul':
						$scores[$element] *= $value;
						break;
					case 'div':
						$scores[$element] /= $value;
						break;
					
					default:
						# code...
						break;
				}
			}

			if(in_array($operator, $stringOperators))
			{
				switch ($operator) {
					case 'set':
						$scores[$element] = $value;
						break;
					case 'append':
						if(! isset($scores[$element]))
						{
							$scores[$element] = "";
						}
						$scores[$element] = $scores[$element]."".$value;
						break;
					case 'list':
						$scores[$element][] = $value;
						break;
					
					default:
						# code...
						break;
				}
			}
		}

		return $scores;
	}


	private function getNodeWithOrder(Journey $journey, $order)
	{
		return Node::whereTreeId($journey->tree_id)->whereIdentifier($order)->first();
	}
}
