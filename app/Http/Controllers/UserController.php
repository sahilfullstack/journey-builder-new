<?php

namespace App\Http\Controllers;

use App\Jobs\User\CreateAnonomousUser;
use App\Jobs\Journey\StartJourney;
use App\Http\Controllers\Controller;
use App\Models\Tree;

class UserController extends Controller
{
    public function onboard($slug)
    {
    	$tree = Tree::whereSlug($slug)->first();

    	if(is_null($tree)) redirect('/');

        // Create Anonomous user
        $user = $this->dispatch(new CreateAnonomousUser);
                
        $journey = $this->dispatch(new StartJourney($tree, $user));  

        return redirect("journeys/{$journey->getRouteKey()}");
    }
}
