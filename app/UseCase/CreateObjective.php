<?php

namespace App\UseCase;

use App\Models\Objective;

class CreateObjective
{
    protected Objective $objectiveModel;

    public function __construct(Objective $objective)
    {
        $this->objectiveModel = $objective;
    }

    public function execute(array $data): Objective
    {
        $this->objectiveModel->fill($data);
        $this->objectiveModel->save();
        return $this->objectiveModel->refresh();
    }
}
