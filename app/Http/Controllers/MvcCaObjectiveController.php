<?php

namespace App\Http\Controllers;

use App\UseCase\CreateObjective;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Tentativa de implementar a clean architecture "pela metade"
 */
class MvcCaObjectiveController extends Controller
{
    public function store(Request $request, CreateObjective $useCase): JsonResponse {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $response = $useCase->execute($request->all());

        return response()->json($response, Response::HTTP_CREATED);
    }
}
