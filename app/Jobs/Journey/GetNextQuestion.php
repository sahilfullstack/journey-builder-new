<?php

namespace App\Jobs\Journey;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Repos\Path\PathRepo;
use App\Services\Nodes\NodeManager;

use App\Models\{Path, Node, Journey};
use App\User;
use App\Services\JourneyManager\JourneyManager;

class GetNextQuestion
{
    use Dispatchable, Queueable;

    protected $user, $journey;

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
    public function handle(Request $request, PathRepo $pathRepo, JourneyManager $journeyManager)
    {      
        return $journeyManager->nextNode($this->journey);
    }
}
