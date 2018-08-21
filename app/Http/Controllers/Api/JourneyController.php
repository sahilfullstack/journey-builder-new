<?php

namespace App\Http\Controllers\Api;

use App\Jobs\Journey\StartJourney;
use App\Http\Controllers\Controller;
use App\Models\Tree;

class JourneyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {        
        $this->middleware('auth:api');
    }

    public function start(Tree $tree)
    {
        $user = auth()->user();
        
        // Start a journey
        $journey = $this->dispatch(new StartJourney($tree, $user));    

        return $journey;
    }
}
