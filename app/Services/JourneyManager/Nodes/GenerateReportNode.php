<?php

namespace App\Services\JourneyManager\Nodes;

use App\Models\{Journey, Node, Path};

class GenerateReportNode {

	public function next(Journey $journey, Path $Path)
	{
		$this->generateReport();

		return Node::whereTreeId($journey->tree_id)->whereIdentifier($Path['options'][0]['to'])->first();
	}

	private function generateReport()
	{
		// action performed to generate report
	}
}
