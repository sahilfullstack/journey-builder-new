<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Jobs\Tree\{ListTrees, GetTree, GetFirstQuestion};
use App\Http\Controllers\Controller;
use App\Http\Requests\Tree\{ListTreesRequest, GetTreeRequest};
use App\Http\Resources\Tree as TreeResource;
use App\Http\Resources\Question as QuestionResource;

class TreeController extends Controller
{
    public function list(ListTreesRequest $request)
    {
    	$trees = $this->dispatch(new ListTrees);

        return TreeResource::collection($trees);
    }

    public function show(GetTreeRequest $request, Tree $tree)
    {
        $tree = $this->dispatch(new GetTree($tree));
            
        return new TreeResource($tree);
    }

    public function showQuestion(Tree $tree)
    {
	    $tree = $this->dispatch(new GetFirstQuestion($tree));
	    	
		return new QuestionResource($tree);
    }
}
