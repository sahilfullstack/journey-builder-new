<?php

namespace App\Jobs\Path;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Repos\Path\{PathRepo};
use App\Utility\Nodes\NodeManager;

use App\Models\{Path, Node, Journey};
use App\Http\Requests\Path\{ValidatePathResponseRequest};
use App\Jobs\Journey\MarkFinished;
use App\Exceptions\InvalidInputException;

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

        if( ! $this->isNextNode($nodeManager))
        {
            // check for valid node
            $this->isNodeValid();

            // delete child paths
            $paths = $this->journey->paths()->where('node_id', '>=', $this->node->id)->get();

            foreach ($paths as $oldPath) 
            {
                $oldPath->delete();
            }
        }
        
        $this->save($path, $pathRepo);
    }

    private function isNodeValid()
    {
        $node = $this->journey->paths()->where('node_id', '=', $this->node->id)->notDeleted()->first();

        if(is_null($node))
        {
            throw new InvalidInputException("Node is invalid.");
        }
    }

    private function save($path, PathRepo $pathRepo)
    {
        $pathModel = new Path($path);

        $pathRepo->store($pathModel);

        if(is_null($path['linker']['to']))
        {
            dispatch(new MarkFinished($this->journey));
        }
    }

    private function isNextNode(NodeManager $nodeManager)
    {
        $nextNode = $nodeManager->next($this->journey);

        return ($nextNode->id == $this->node->id);
    }
}
