<?php

namespace App\Http\Controllers\Api;

use App\Models\{Journey, Node};
use App\Transformers;
use App\Jobs\Journey\{ListJourneys, GetJourney, GetNextQuestion};
use App\Jobs\Path\{StorePath};
use App\Http\Controllers\Controller;
use App\Http\Requests\Journey\{ListJourneysRequest, GetJourneyRequest, GetNextQuestionRequest};
use App\Http\Requests\Path\{StorePathRequest};
use App\User;
use App\Http\Resources\Journey as JourneyResource;
use App\Http\Resources\Question as QuestionResource;

class UserController extends Controller
{
    public function listJourneys(ListJourneysRequest $request, User $user)
    {
        $journeys = $this->dispatch(new ListJourneys($user));

        return JourneyResource::collection($journeys);
    }

    public function getJourney(GetJourneyRequest $request, User $user, Journey $journey)
    {
    	$journey = $this->dispatch(new GetJourney($user, $journey));

        return new JourneyResource($journey);
    }

    public function getNextQuestion(GetNextQuestionRequest $request, User $user, Journey $journey)
    {
        $node = $this->dispatch(new GetNextQuestion($user, $journey));

        return new QuestionResource($node);
    }

    public function storePath(StorePathRequest $request, User $user, Journey $journey)
    {
        $node = $this->dispatch(new GetNextQuestion($user, $journey));

        $response =  $request->get('response');

        // merging the node to request object for future validation
        $request->merge(['node' => $node]);

        $this->dispatch(new StorePath($journey, $node,  $response));

        $node = $this->dispatch(new GetNextQuestion($user, $journey));

         return new QuestionResource($node);
    }
}
