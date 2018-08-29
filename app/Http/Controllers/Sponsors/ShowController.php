<?php

namespace App\Http\Controllers\Sponsors;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sponsor $sponsor
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request, Sponsor $sponsor) : JsonResponse
    {
        return response()->json([
            'data' => $sponsor
        ]);
    }
}
