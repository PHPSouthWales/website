<?php

namespace App\Http\Controllers\Organisers;

use App\Models\Organiser;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Organiser $organiser
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request, Organiser $organiser) : JsonResponse
    {
        return response()->json([
            'organiser' => $organiser
        ]);
    }
}
