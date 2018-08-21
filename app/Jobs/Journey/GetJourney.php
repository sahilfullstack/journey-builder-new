<?php

namespace App\Jobs\Journey;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Repos\Journey\JourneyRepo;
use App\Models\{Journey, User};

class GetJourney
{
    use Dispatchable, Queueable;

    /**
     * Instance of App\Models\Journey
     */
    protected $journey, $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, Journey $journey)
    {
        $this->user    = $user;
        $this->journey = $journey;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(JourneyRepo $journeyRepo)
    {
        return $journeyRepo->find($this->journey->id);
    }
}

