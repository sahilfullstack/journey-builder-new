<?php

namespace App\Jobs\Tree;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

use App\Repos\Tree\TreeRepo;
use App\Models\{Tree, Node};

class GetFirstQuestion
{
    use Dispatchable, Queueable;

    /**
     * Instance of App\Models\Tree
     */
    protected $tree;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Tree $tree)
    {
        $this->tree = $tree;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(TreeRepo $treeRepo)
    {
        return $this->tree->nodes()->first();
    }
}

