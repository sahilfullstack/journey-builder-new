<?php

namespace App\Services\JourneyManager\Nodes;

use App\Models\{UserJourney, Node, UserJourneyNode};

class GenerateReportNode {

	public function next(UserJourney $journey, UserJourneyNode $userJourneyNode)
	{
		$this->generateReport();

		return Node::whereTreeId($journey->tree_id)->whereOrder($userJourneyNode['options'][0]['to'])->first();
	}

	private function generateReport()
	{
		// action performed to generate report
	}
}
