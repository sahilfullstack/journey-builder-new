<?php

namespace App\Repos\User;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Exception;
use ModelNotFoundException, MassAssignmentException;

use App\User;

class EloquentUserRepo implements UserRepo {

	public function find(Int $id)
	{
		try
		{
			return User::findOrFail($id);
		}
		catch(ModelNotFoundException $e)
		{
			throw new Exceptions\NotFoundException('User doesn\'t exists');
		}
		catch(Exception $e)
		{
			throw $e;
		}
	}

	public function store(User $user)
	{
		try
		{
        	$user->save();

        	return $this->find($user->id);
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