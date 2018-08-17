<?php

namespace App\Services\Nodes;

use App\Models\{Journey, Node};

class NodeManager {

	protected $nodeManager;

	public function __construct() {}

	public function preparePath(Journey $journey, Node $node, Array $response)
	{
        $nodeType = studly_case($node->linker['type']);

        $path = [
			'journey_id' => $journey->id,
			'node_id'    => $node->id,
        	'linker' => app("App\\Services\\Nodes\\{$nodeType}Node")->prepareLinkerForPath($node, $response),
        ];

        return $path;
	}
}
