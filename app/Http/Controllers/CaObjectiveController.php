<?php

namespace App\Http\Controllers;

use App\Http\Resources\CreateObjectiveResource;
use Core\UseCase\CreateObjective;
use Core\UseCase\DTO\ObjectiveInputDTO;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Controller baseado na Clean Architecture
 */
class CaObjectiveController extends Controller
{
    public function store(Request $request, CreateObjective $useCase): JsonResponse {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $inputDto = new ObjectiveInputDTO(
            $request->input('title'),
            $request->input('description'),
            $request->input('owner'),
            $request->input('type'),
            $request->input('status'),
            $request->input('period'),
            $request->input('key_results', [])
        );

        $outputDto = $useCase->execute($inputDto);

        return response()->json($outputDto, Response::HTTP_CREATED);
    }
}
