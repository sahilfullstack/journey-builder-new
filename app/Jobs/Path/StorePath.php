<?php

namespace App\Jobs\Path;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Repos\Path\PathRepo;
use App\Services\Nodes\NodeManager;

use App\Models\{Path, Node, Journey};
use App\Http\Requests\Path\{ValidatePathResponseRequest};

class StorePath
{
    use Dispatchable, Queueable;

    protected $node, $response, $journey;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Journey $journey, Node $node, $response)
    {
        $this->journey  = $journey;
        $this->node     = $node;
        $this->response = $response;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ValidatePathResponseRequest $request, PathRepo $pathRepo, NodeManager $nodeManager)
    {       
        $path = $nodeManager->preparePath($this->journey, $this->node, $this->response);

        $pathModel = new Path($path);

        $pathRepo->store($pathModel);
    }
}
