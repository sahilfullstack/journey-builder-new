<?php

namespace App\Repos\Journey;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Exception;
use ModelNotFoundException, MassAssignmentException;

use App\Models\Journey;
use App\User;

class EloquentJourneyRepo implements JourneyRepo {

	public function find(User $user, Int $id)
	{
		try
		{
			return Journey::notDeleted()->where('user_id', $user->id)->findOrFail($id);
		}
		catch(ModelNotFoundException $e)
		{
			throw new Exceptions\NotFoundException('Journey doesn\'t exists');
		}
		catch(Exception $e)
		{
			throw $e;
		}
	}

	public function list(User $user)
	{
		try
		{
			return Journey::notDeleted()->where('user_id', $user->id)->get();
		}
		catch(ModelNotFoundException $e)
		{
			throw new Exceptions\NotFoundException('Journey doesn\'t exists');
		}
		catch(Exception $e)
		{
			throw $e;
		}
	}

	public function store(Journey $journey)
	{
		try
		{
        	$journey->save();

        	return $this->find($journey->id);
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