<?php

namespace App\Http\Controllers\Sponsors;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request) : JsonResponse
    {
        return response()->json([
            'data' => Sponsor::all()
        ]);
    }
}
