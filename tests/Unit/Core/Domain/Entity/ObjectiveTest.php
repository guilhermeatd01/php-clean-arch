<?php

namespace tests\Unit\Core\Domain\Entity;

use Core\Domain\Entity\Objective;
use Tests\TestCase;

class ObjectiveTest extends TestCase
{
    public function testCreateObjective()
    {
        $objective = new Objective(
            null,
            'Objective 1',
            'Description 1',
            'Owner 1',
            'Type 1',
            'Status 1',
            'Period 1',
            []
        );

        $this->assertInstanceOf(Objective::class, $objective);
    }
}
