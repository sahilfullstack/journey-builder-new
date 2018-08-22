<?php

namespace App\Http\Controllers;

use App\Jobs\User\CreateAnonomousUser;
use App\Jobs\Journey\StartJourney;
use App\Http\Controllers\Controller;
use App\Models\Tree;

class UserController extends Controller
{
    public function onboard(Tree $tree)
    {
        // Create Anonomous user
        $user = $this->dispatch(new CreateAnonomousUser);
                
        $journey = $this->dispatch(new StartJourney($tree, $user));  

        return redirect("journeys/{$journey->getRouteKey()}");
    }
}
