<?php

namespace App\Http\Controllers\Events;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Event $event
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request, Event $event) : JsonResponse
    {
        return response()->json([
            'data' => $event
        ]);
    }
}
