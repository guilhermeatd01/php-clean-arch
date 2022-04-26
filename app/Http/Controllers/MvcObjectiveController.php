<?php

namespace App\Http\Controllers;

use App\Models\Objective;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Controller MVC padrão (controller acessando diretamente o model)
 */
class MvcObjectiveController extends Controller
{
    protected Objective $objectiveModel;

    public function __construct(Objective $objective)
    {
        $this->objectiveModel = $objective;
    }

    public function store(Request $request): JsonResponse {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $this->objectiveModel->fill($request->all());
        $this->objectiveModel->save();
        $this->objectiveModel->refresh();

        return response()->json($this->objectiveModel, Response::HTTP_CREATED);
    }
}
