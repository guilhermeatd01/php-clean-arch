<?php

namespace Core\UseCase\DTO;

class ObjectiveInputDTO
{
    public string $title;
    public string $description;
    public ?string $owner;
    public ?string $type;
    public ?string $status;
    public ?string $period;
    public array $keyResults;

    public function __construct(
        string $title,
        string $description,
        ?string $owner,
        ?string $type,
        ?string $status,
        ?string $period,
        array $keyResults
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->owner = $owner;
        $this->type = $type;
        $this->status = $status;
        $this->period = $period;
        $this->keyResults = $keyResults;
    }
}
