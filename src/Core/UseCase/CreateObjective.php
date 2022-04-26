<?php

namespace Core\UseCase;

use Core\Domain\Entity\Objective;
use Core\Domain\Repository\ObjectiveRepositoryInterface;
use Core\UseCase\DTO\ObjectiveInputDTO;
use Core\UseCase\DTO\ObjectiveOutputDTO;

class CreateObjective
{
    protected ObjectiveRepositoryInterface $objectiveRepository;

    public function __construct(ObjectiveRepositoryInterface $repository)
    {
        $this->objectiveRepository = $repository;
    }

    public function execute(ObjectiveInputDTO $objectiveDTO): ObjectiveOutputDTO
    {
        $objective = new Objective(
            null,
            $objectiveDTO->title,
            $objectiveDTO->description,
            $objectiveDTO->owner,
            $objectiveDTO->type,
            $objectiveDTO->status,
            $objectiveDTO->period,
            $objectiveDTO->keyResults
        );

        $this->objectiveRepository->store($objective);

        return new ObjectiveOutputDTO(
            $objective->id,
            $objective->title,
            $objective->description,
            $objective->owner,
            $objective->type,
            $objective->status,
            $objective->period,
            $objective->keyResults
        );
    }
}
