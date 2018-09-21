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

		// getting all the paths of a journey
		$paths = $journey->paths()->with('node')->get();

		// plucking their nodes
		$nodes = $paths->pluck('node');

		$sectionsQuestionBank = array_count_values($nodes->pluck('section_id')->toArray());

		// filling up the section question number in the node
		list($nextNode, $sectionsQuestionBank) = $this->fillSectionQuestion($nextNode, $sectionsQuestionBank);	

		return $nextNode;
	}

	public function all(Journey $journey)
	{
		if($this->isJourneyEmpty($journey)) return $this->listFirstNode($journey);
		// getting all the paths of a journey
		$paths = $journey->paths()->with('node')->get();

		// plucking their nodes
		$nodes = $paths->pluck('node');

		$sectionsQuestionBank = [];

		// merging responses in the node object
		$nodes = $nodes->map(function ($node) use($paths, &$sectionsQuestionBank) {

			list($node, $sectionsQuestionBank) = $this->fillSectionQuestion($node, $sectionsQuestionBank);						

			$node->response = $paths->where('node_id', $node->id)->first()->linker;

			return $node; 
		});

		if(! $journey->finished())
		{
			// list($node, $sectionsQuestionBank) = $this->fillSectionQuestion($this->next($journey), $sectionsQuestionBank);	

			// also merging the next node
			$nodes = $nodes->push($this->next($journey));
		}

		return $nodes;
	}

	private function isJourneyEmpty(Journey $journey)
	{
		return count($journey->paths) == 0;
	}

	private function getFirstNode(Journey $journey)
	{
		$node = Node::whereTreeId($journey->tree_id)->whereIdentifier(1)->first();
		$node->section_question = 1;
		
		return $node; 
	}

	private function listFirstNode(Journey $journey)
	{
		$nodes = Node::whereTreeId($journey->tree_id)->whereIdentifier(1)->get();

		// merging responses in the node object
		$nodes = $nodes->map(function ($node) {			
			$node->section_question = 1;
			return $node; 
		});

		return $nodes;
	}

	private function fillSectionQuestion($node, $fillSectionQuestion)
	{
		if(! is_null($node->section_id))
		{
			if(isset($fillSectionQuestion[$node->section_id]))
			{
				$fillSectionQuestion[$node->section_id] = $fillSectionQuestion[$node->section_id]+1;
				$node->section_question = $fillSectionQuestion[$node->section_id];
			}
			else
			{
				$fillSectionQuestion[$node->section_id] = 1;
				$node->section_question = 1;
			}
		}

		return [$node, $fillSectionQuestion];
	}
}
