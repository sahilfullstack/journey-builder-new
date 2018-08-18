<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tree;
use App\User;
use App\Models\{Journey, Path, Node};
use App\Services\JourneyManager\JourneyManager;
use Illuminate\Http\Request;
use App\Jobs\Path\StorePath;

class CreateJourneyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-journey {user} {tree}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create user journey.';
    
    protected $journeyManager;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(JourneyManager $journeyManager)
    {
        parent::__construct();

        $this->journeyManager = $journeyManager;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tree = Tree::find($this->argument('tree'));
        $user = User::find($this->argument('user'));
            
         Journey::create([
                'user_id' => $user->id,
                'tree_id' => $tree->id
            ]);
    }
}
