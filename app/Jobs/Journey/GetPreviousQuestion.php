<?php

namespace App\Jobs\Journey;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Repos\Path\PathRepo;
use App\Utility\Nodes\NodeManager;

use App\Models\{Path, Node, Journey};
use App\Utility\Journey\JourneyManager;

class GetPreviousQuestion
{
    use Dispatchable, Queueable;

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
    public function handle(Request $request, PathRepo $pathRepo, JourneyManager $journeyManager)
    {
        return $journeyManager->previousNode($this->journey);
    }
}
