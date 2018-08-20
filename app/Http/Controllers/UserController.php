<?php

namespace App\Http\Controllers;

use App\Jobs\User\{CreateAnonomousUser};
use App\Http\Controllers\Controller;
use App\Models\Tree;

class UserController extends Controller
{
    public function onboard(Tree $tree)
    {
        // Create Anonomous user
        $user = $this->dispatch(new CreateAnonomousUser);
                
        // return with user login
        auth()->login($user, true);

        return view('onboard');
    }
}
