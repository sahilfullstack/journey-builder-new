<?php

namespace App\Http\Controllers;

use League\Fractal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Request;

trait TransformsResources
{
	private function respondTransformed($resource, Fractal\TransformerAbstract $transformer, $availableIncludes = [])
	{
	    $fractal = new Fractal\Manager;

	    if($resource instanceof Collection || $resource instanceof EloquentCollection)
	    {
	    	$resource = new Fractal\Resource\Collection($resource, $transformer);
	    }
	    else if($resource instanceof LengthAwarePaginator)
	    {
	    	$paginator = $resource;

	    	$resource = new Fractal\Resource\Collection($paginator->getCollection(), $transformer);
			$resource->setPaginator(new IlluminatePaginatorAdapter($paginator));
	    }
	    else
	    {
	    	$resource = new Fractal\Resource\Item($resource, $transformer);
	    }

	    if(!is_null($include = Request::input('include')))
	    {
	    	$availableIncludes = $include;
	    }
	    
	    $fractal->parseIncludes($availableIncludes);

	    return response($fractal->createData($resource)->toArray(), 200);
	}
}