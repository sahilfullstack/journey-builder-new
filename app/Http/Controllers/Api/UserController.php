<?php

namespace App\Http\Controllers\Api;

use App\Models\{Journey, Node, User};
use App\Jobs\Journey\{ListJourneys, GetJourney, GetNextQuestion, GetJourneyNodes};
use App\Jobs\Path\{StorePath};
use App\Http\Controllers\Controller;
use App\Http\Requests\Journey\{ListJourneysRequest, GetJourneyRequest, GetNextQuestionRequest, GetPrevQuestionRequest};
use App\Http\Requests\Path\{StorePathRequest};
use App\Http\Resources\Journey as JourneyResource;
use App\Http\Resources\Question as QuestionResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {        
        // $this->middleware('auth:api');
    }

    public function listJourneys(ListJourneysRequest $request, User $user)
    {
        $journeys = $this->dispatch(new ListJourneys($user));

        return JourneyResource::collection($journeys);
    }

    public function getJourney(GetJourneyRequest $request, Journey $journey)
    {
        $journey = $this->dispatch(new GetJourney($journey));

        return new JourneyResource($journey);
    }

    public function getJourneyNodes(Journey $journey)
    {
    	$nodes = $this->dispatch(new GetJourneyNodes($journey));

        return QuestionResource::collection($nodes);
    }

    public function getNextQuestion(GetNextQuestionRequest $request, Journey $journey)
    {
        $node = $this->dispatch(new GetNextQuestion($journey));

        return new QuestionResource($node);
    }

    public function storePath(StorePathRequest $request, Journey $journey)
    {
        $node = $this->dispatch(new GetNextQuestion($journey));

        $response =  $request->get('response');

        // merging the node to request object for future validation
        $request->merge(['node' => $node]);

        $this->dispatch(new StorePath($journey, $node,  $response));

        $node = $this->dispatch(new GetNextQuestion($journey));

         return new QuestionResource($node);
    }
}
