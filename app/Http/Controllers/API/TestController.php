<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function one(Request $request): JsonResponse
    {
        return response()->json(['test' => 'Here...']);
    }
}
