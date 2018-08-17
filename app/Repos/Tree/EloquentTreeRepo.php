<?php

namespace App\Repos\Tree;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Exception;
use ModelNotFoundException, MassAssignmentException;

use App\Models\Tree;

class EloquentTreeRepo implements TreeRepo {

	public function find(Int $id)
	{
		try
		{
			return Tree::notDeleted()->findOrFail($id);
		}
		catch(ModelNotFoundException $e)
		{
			throw new Exceptions\NotFoundException('Tree doesn\'t exists');
		}
		catch(Exception $e)
		{
			throw $e;
		}
	}

	public function list()
	{
		try
		{
			return Tree::notDeleted()->get();
		}
		catch(ModelNotFoundException $e)
		{
			throw new Exceptions\NotFoundException('Tree doesn\'t exists');
		}
		catch(Exception $e)
		{
			throw $e;
		}
	}

	public function store(Tree $tree)
	{
		try
		{
        	$tree->save();

        	return $this->find($tree->id);
		}
		catch(MassAssignmentException $e)
		{
			throw $e;
		}
		catch(Exception $e)
		{
			throw $e;
		}
	}


}