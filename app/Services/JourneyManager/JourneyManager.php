<?php

namespace App\Services\JourneyManager;

use App\Models\UserJourney;
use App\Models\Node;

class JourneyManager {

	protected $nodeManager;

	public function __construct(NodeManager $nodeManager)
	{
		$this->nodeManager = $nodeManager;
	}

	public function nextNode(UserJourney $journey)
	{
		return $this->nodeManager->next($journey);
	}
}
