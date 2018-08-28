<?php

namespace App\Http\Controllers\Speakers;

use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request, Speaker $speaker) : JsonResponse
    {
        return response()->json([
            'speaker' => $speaker
        ]);
    }
}
