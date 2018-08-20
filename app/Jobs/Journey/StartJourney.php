<?php

namespace App\Jobs\Journey;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Repos\Journey\JourneyRepo;
use App\Models\{Journey, Tree};
use App\User;

class StartJourney
{
    use Dispatchable, Queueable;

    /**
     * Instance of App\Models\Journey
     */
    protected $tree, $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Tree $tree, User $user)
    {
        $this->tree = $tree;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(JourneyRepo $journeyRepo)
    {
        $journeyModel = new Journey([
                'user_id' => $this->user->id,
                'tree_id' => $this->tree->id
            ]);

        return $journeyRepo->store($journeyModel);
    }
}

