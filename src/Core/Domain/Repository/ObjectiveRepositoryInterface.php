<?php

namespace Core\Domain\Repository;

use Core\Domain\Entity\Objective;

interface ObjectiveRepositoryInterface
{
    public function store(Objective $entity): Objective;
}
