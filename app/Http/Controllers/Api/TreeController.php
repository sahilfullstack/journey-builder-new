<?php

namespace App\Http\Controllers\Api;

use App\Models\Tree;
use App\Transformers;
use App\Jobs\Tree\{ListTrees, GetTree};
use App\Http\Controllers\Controller;
use App\Http\Requests\Tree\{ListTreesRequest, GetTreeRequest};
use App\Http\Resources\Tree as TreeResource;

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
}
