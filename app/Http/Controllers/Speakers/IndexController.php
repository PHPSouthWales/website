<?php

namespace App\Http\Controllers\Speakers;

use App\Models\Speaker;
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
            'data' => Speaker::with('talks')->get()
        ]);
    }
}
