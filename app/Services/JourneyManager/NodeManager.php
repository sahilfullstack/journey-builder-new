<?php

namespace App\Services\JourneyManager;

use App\Models\{Journey, Node, Path};
use App\Services\JourneyManager\Nodes\{NormalNode, GenerateReportNode, DeciderNode};

class NodeManager {

	public function next(Journey $journey)
	{		
		if($this->isJourneyEmpty($journey)) return $this->getFirstNode($journey);

		$userLastJourneyNode = $journey->nodes()->orderBy('id', 'desc')->first();
		
		dd($userLastJourneyNode);

		$nextNode = Node::whereTreeId($journey->tree_id)->whereIdentifier($userLastJourneyNode['options'][0]['to'])->first();


		switch ($nextNode->type) 
		{
			case 'decider':
				$nextFinalNode = (new DeciderNode)->next($journey, $nextNode);
				break;

			case 'generate_report':
				// $nextNode = (new GenerateReportNode)->next($journey, $userLastJourneyNode);
				// perform required actions to generate report
				$nextFinalNode = $nextNode;
				break;
			
			default:
				$nextFinalNode = $nextNode;
				break;
		}

dd($nextFinalNode);
// array:5 [
//   "age_score" => 1
//   "skin_score" => 8
//   "habits_score" => 2
//   "acne_score" => 10
//   "cause_score" => 6
// ]

		return $nextFinalNode;
	}
	
	private function isJourneyEmpty(Journey $journey)
	{
		return count($journey->nodes) == 0;
	}

	private function getFirstNode(Journey $journey)
	{
		return Node::whereTreeId($journey->tree_id)->whereIdentifier(1)->first();
	}

}
