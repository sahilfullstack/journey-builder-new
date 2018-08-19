<?php

namespace App\Services\JourneyManager;

use App\Models\Journey;
use App\Models\Node;
use App\Services\Nodes\NodeManager;

class JourneyManager {

	protected $nodeManager;

	public function __construct(NodeManager $nodeManager)
	{
		$this->nodeManager = $nodeManager;
	}

	public function nextNode(Journey $journey)
	{
		return $this->nodeManager->next($journey);
	}

}
