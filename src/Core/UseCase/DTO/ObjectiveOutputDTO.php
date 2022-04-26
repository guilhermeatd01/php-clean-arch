<?php

namespace Core\UseCase\DTO;

class ObjectiveOutputDTO
{
    public string $id;
    public string $title;
    public string $description;
    public string $owner;
    public string $type;
    public string $status;
    public string $period;

    public function __construct(
        string $id,
        string $title,
        string $description,
        ?string $owner,
        ?string $type,
        ?string $status,
        ?string $period
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->owner = $owner;
        $this->type = $type;
        $this->status = $status;
        $this->period = $period;
    }
}
