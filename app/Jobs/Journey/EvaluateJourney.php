<?php

namespace App\Jobs\Journey;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Repos\Journey\JourneyRepo;
use App\Models\Journey;
use App\Utility\Journey\JourneyManager;

class EvaluateJourney
{
    use Dispatchable, Queueable;

    /**
     * Instance of App\Models\Journey
     */
    protected $journey;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Journey $journey) 
    {
        $this->journey = $journey;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(JourneyManager $journyManager, JourneyRepo $journeyRepo)
    {
        $paths = $this->journey->paths->select('linker')->get()->toArray();
    }
}
