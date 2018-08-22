<?php

namespace App\Repos\Path;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Exception;
use ModelNotFoundException, MassAssignmentException;

use App\Models\Path;

class EloquentPathRepo implements PathRepo {

	public function find(Int $id)
	{
		try
		{
			return Path::notDeleted()->findOrFail($id);
		}
		catch(ModelNotFoundException $e)
		{
			throw new Exceptions\NotFoundException('Path doesn\'t exists');
		}
		catch(Exception $e)
		{
			throw $e;
		}
	}

	public function store(Path $path)
	{
		try
		{
        	$path->save();

        	return $this->find($path->id);
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