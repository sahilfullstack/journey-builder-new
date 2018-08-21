<?php

namespace App\Http\Controllers;

use App\Jobs\User\{CreateAnonomousUser};
use App\Http\Controllers\Controller;
use App\Models\Journey;

class JourneyController extends Controller
{
    public function continue(Journey $journey)
    {    	
	    return view('journey', ['journey' => $journey]);
    }
}
