<?php

namespace tests\Unit\Core\UseCase;

use Core\Domain\Repository\ObjectiveRepositoryInterface;
use Core\UseCase\CreateObjective;
use Core\UseCase\DTO\ObjectiveInputDTO;
use Core\UseCase\DTO\ObjectiveOutputDTO;
use Tests\TestCase;

class CreateObjectiveTest extends TestCase
{
    protected $repositoryMock;
    protected $useCase;

    protected function setUp(): void
    {
        $this->repositoryMock = $this->createMock(ObjectiveRepositoryInterface::class);
        $this->useCase = new CreateObjective($this->repositoryMock);
    }
    
    public function testCreateObjective()
    {
        $this->repositoryMock
            ->expects($this->once())
            ->method('store');

        $output = $this->useCase->execute(new ObjectiveInputDTO(
            'Objective 1',
            'Description 1',
            'Owner 1',
            'Type 1',
            'Status 1',
            'Period 1',
            []
        ));

        $this->assertInstanceOf(ObjectiveOutputDTO::class, $output);
    }
}
