<?php

namespace App\Jobs\User;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Repos\User\UserRepo;
use App\Models\User;

class CreateAnonomousUser
{
    use Dispatchable, Queueable;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(UserRepo $userRepo)
    {       
        $userModel = new User([]);

        return $userRepo->store($userModel);
    }
}
