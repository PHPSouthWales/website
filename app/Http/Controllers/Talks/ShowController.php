<?php

namespace App\Http\Controllers\Talks;

use App\Models\Talk;
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
    public function __invoke(Request $request, Talk $talk) : JsonResponse
    {
        return response()->json([
            'data' => $talk
        ]);
    }
}
