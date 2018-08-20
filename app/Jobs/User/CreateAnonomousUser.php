<?php

namespace App\Jobs\User;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Repos\User\UserRepo;
use App\User;

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
        $userModel = new User([
            'name' => str_random(10),
            'email' => str_random(10),
            'password' => str_random(10),
            'remember_token' => str_random(10)
        ]);

        return $userRepo->store($userModel);
    }
}
