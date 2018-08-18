<?php

namespace App\Http\Controllers\Api;

use App\Models\{Journey, Node};
use App\Transformers;
use App\Jobs\Journey\{ListJourneys, GetJourney, GetNextQuestion};
use App\Jobs\Path\{StorePath};
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransformsResources;
use App\Http\Requests\Journey\{ListJourneysRequest, GetJourneyRequest, GetNextQuestionRequest};
use App\Http\Requests\Path\{StorePathRequest};
use App\User;

class UserController extends Controller
{
	use TransformsResources;

    public function listJourneys(ListJourneysRequest $request, User $user)
    {
        $journeys = $this->dispatch(new ListJourneys($user));

        return $this->respondTransformed($journeys, new Transformers\JourneyTransformer);
    }

    public function getJourney(GetJourneyRequest $request, User $user, Journey $journey)
    {
    	$journey = $this->dispatch(new GetJourney($user, $journey));

		return $this->respondTransformed($journey, new Transformers\JourneyTransformer);
    }

    public function getNextQuestion(GetNextQuestionRequest $request, User $user, Journey $journey)
    {
        $node = $this->dispatch(new GetNextQuestion($user, $journey));

        return $this->respondTransformed($node, new Transformers\QuestionTransformer);        
    }

    public function storePath(StorePathRequest $request, User $user, Journey $journey)
    {
        $node = $this->dispatch(new GetNextQuestion($user, $journey));
        $response =  $request->get('response');

        // merging the node to request object for future validation
        $request->merge(['node' => $node]);

        $node = $this->dispatch(new StorePath($journey, $node,  $response));

        // return $this->respondTransformed($node, new Transformers\QuestionTransformer);        
    }
}
