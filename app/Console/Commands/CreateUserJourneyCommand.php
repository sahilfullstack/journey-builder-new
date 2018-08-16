<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tree;
use App\User;
use App\Models\{UserJourney, UserJourneyNode};
use App\Services\JourneyManager\JourneyManager;

class CreateUserJourneyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-journey {user} {options}';

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
        $mathematicalOperators = ['$add', 'sub', 'mul', 'div'];
        $stringOperators = ["set", "append", "list"];
        $a = '$add';
        dd("hi");
        $tree = Tree::notDeleted()->whereSlug(str_slug('Acne'))->first();
        $user = User::find($this->argument('user'));
            
        if(count($user->journeys) == 0)
        {
             UserJourney::create([
                    'user_id' => $user->id,
                    'tree_id' => $tree->id
                ]);
        }
        else
        {
            $journey = $user->journeys()->orderBy('id', 'desc')->first();

            $node = $this->journeyManager->nextNode($journey);

            //option 1 as answer from user            
            if(count($node['options']) > 0)
            {
                if(count($node['options']) > 1)
                {
                    $options[] = $node['options'][1];
                }
                else
                {
                    $options[] = $node['options'][0];
                }
            }
            else
            {
                // todo
                // have to implement fininshed when journey gets completed
                $options = [];
            }

            UserJourneyNode::create([
                'user_journey_id' => $journey->id,
                'node_id' => $node->id,
                'options' => $options
            ]);
        }
    }
}
