<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateResource;
use App\Models\State;

class LocationApiController extends Controller
{
    /**
     * Return all states with their LGAs for Nigeria.
     */
    public function states()
    {
        $states = State::with('localGovernments')->orderBy('name')->get();
        return StateResource::collection($states);
    }
}
