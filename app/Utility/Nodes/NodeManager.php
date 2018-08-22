<?php

namespace App\Utility\Nodes;

use App\Models\{Journey, Node};

class NodeManager {

	public function __construct() {}

	public function preparePath(Journey $journey, Node $node, $response)
	{
        $nodeType = studly_case($node->linker['type']);

        $path = [
			'journey_id' => $journey->id,
			'node_id'    => $node->id,
			'linker'     => app("App\\Utility\\Nodes\\{$nodeType}Node")->prepareLinkerForPath($node, $response),
        ];

        return $path;
	}

	public function next(Journey $journey)
	{
		if($this->isJourneyEmpty($journey)) return $this->getFirstNode($journey);

		$userLastJourneyPath = $journey->lastPath();

		$nextNode = Node::whereTreeId($journey->tree_id)->whereIdentifier($userLastJourneyPath->linker['to'])->first();

		$nodeType = studly_case($nextNode->linker['type']);

		$nodeClass = app("App\\Utility\\Nodes\\{$nodeType}Node");

		if($nodeClass instanceof DeciderInterface)
		{
			$nextNode = $nodeClass->decide($journey, $nextNode);
		}

		return $nextNode;
	}

	private function isJourneyEmpty(Journey $journey)
	{
		return count($journey->paths) == 0;
	}

	private function getFirstNode(Journey $journey)
	{
		return Node::whereTreeId($journey->tree_id)->whereIdentifier(1)->first();
	}
}
