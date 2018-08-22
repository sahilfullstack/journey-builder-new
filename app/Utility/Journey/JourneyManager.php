<?php

namespace App\Utility\Journey;

use App\Models\Journey;
use App\Models\Node;
use App\Utility\Nodes\NodeManager;

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

	public function nodes(Journey $journey)
	{
		return $this->nodeManager->all($journey);
	}
}
