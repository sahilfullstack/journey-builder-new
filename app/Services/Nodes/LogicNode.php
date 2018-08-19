<?php

namespace App\Services\Nodes;

use App\Models\{Node, Journey};
use App\Jobs\Journey\EvaluateJourney;

class LogicNode implements DeciderInterface {

	protected $decisionMaker;

	public function __construct(DecisionMaker $decisionMaker) 
	{
		$this->decisionMaker = $decisionMaker;
	}

	public function decide(Journey $journey, Node $node)
	{
        $linkers = $journey->linkers();
	
		$scores = $this->evaluateLinkers($linkers);

		$node = $this->decisionMaker->applyLogic($node, $scores);

		return $node;
	}

	private function evaluateLinkers($linkers)
	{
		$scores = [];

		foreach ($linkers as $key => $linker) 
		{
			$nodeType = studly_case($linker['linker']['type']);
			$scores = app("App\\Services\\Nodes\\{$nodeType}Node")->evaluateLinker($linker['linker'], $scores);
		}

		return $scores;
	}
}
