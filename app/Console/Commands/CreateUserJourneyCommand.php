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
        $tree = Tree::notDeleted()->whereSlug(str_slug('General Assessment'))->first();
        $user = User::find($this->argument('user'));
            
        if(count($user->journeys) == 0)
        {
             Journey::create([
                    'user_id' => $user->id,
                    'tree_id' => $tree->id
                ]);
        }
        else
        {
            $journey = $user->journeys()->orderBy('id', 'desc')->first();

            $node = $this->journeyManager->nextNode($journey);
dd($node);
            // select_one
            // $response = [
            //     "orders" => [1, 3]
            // ];
            $response = [
                'response' => 'something fishy'
            ]; 

            dispatch(new StorePath($journey, $node, $response));
        }
    }
}
