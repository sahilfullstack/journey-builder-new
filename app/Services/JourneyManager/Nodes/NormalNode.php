<?php

namespace App\Services\JourneyManager\Nodes;

use App\Models\{UserJourney, Node, UserJourneyNode};

class NormalNode {

	public function next(UserJourney $journey, UserJourneyNode $userJourneyNode)
	{
		return Node::whereTreeId($journey->tree_id)->whereOrder($userJourneyNode['options'][0]['to'])->first();
	}
}
