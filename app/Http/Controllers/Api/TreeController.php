<?php

namespace App\Http\Controllers\Api;

use App\Models\Tree;
use App\Transformers;
use App\Jobs\Tree\{ListTrees, GetTree};
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransformsResources;
use App\Http\Requests\Tree\{ListTreesRequest, GetTreeRequest};


class TreeController extends Controller
{
	use TransformsResources;

    public function list(ListTreesRequest $request)
    {
    	$trees = $this->dispatch(new ListTrees);

		return $this->respondTransformed($trees, new Transformers\TreeTransformer);
    }

    public function show(GetTreeRequest $request, Tree $tree)
    {
	    $tree = $this->dispatch(new GetTree($tree));
	    	
		return $this->respondTransformed($tree, new Transformers\TreeTransformer);
    }
}
