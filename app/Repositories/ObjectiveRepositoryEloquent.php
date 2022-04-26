<?php

namespace App\Repositories;

use App\Models\Objective as ObjectiveModel;
use Core\Domain\Entity\Objective;
use Core\Domain\Repository\ObjectiveRepositoryInterface;

class ObjectiveRepositoryEloquent implements ObjectiveRepositoryInterface
{
    protected ObjectiveModel $objectiveModel;

    public function __construct(ObjectiveModel $objectiveModel)
    {
        $this->objectiveModel = $objectiveModel;
    }

    private function toObjective(ObjectiveModel $objective): Objective
    {
        return new Objective(
            $objective->id,
            $objective->title,
            $objective->description,
            $objective->owner,
            $objective->type,
            $objective->status,
            $objective->period
        );
    }

    public function store(Objective $entity): Objective
    {
        try {
            $objective = $this->objectiveModel->create([
                'id' => $entity->id,
                'title' => $entity->title,
                'description' => $entity->description,
                'owner' => $entity->owner,
                'type' => $entity->type,
                'status' => $entity->status,
                'period' => $entity->period,
            ]);

            return $this->toObjective($objective);
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
