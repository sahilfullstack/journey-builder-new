<?php

namespace App\Services\Nodes;

class OperationManager {

	public function __construct() {}

	public function evaluate($operator, $value, $element, $scores)
	{
		$mathematicalOperators = ["add", "sub", "mul", "div"];
		$stringOperators = ["set", "append", "list"];

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

		return $scores;
	}

	public function applyOperations($operations, $scores)
	{
		foreach ($operations as $key => $operation) {
			foreach ($operation as $element => $operators) {

					$operator = array_keys($operators)[0];
					$value = array_values($operators)[0];

					$scores = $this->evaluate($operator, $value, $element, $scores);
				}
		}

		return $scores;
	}
}
