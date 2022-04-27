<?php

namespace Core\Domain\Entity;

use Core\Domain\Entity;
use Core\Domain\ValueObject\Uuid;

class Objective extends Entity
{
    protected ?Uuid $id;
    protected string $title;
    protected string $description;
    protected ?string $owner;
    protected ?string $type;
    protected ?string $status;
    protected ?string $period;
    protected array $keyResults;

    public function __construct(
        ?string $id,
        string $title,
        string $description,
        ?string $owner,
        ?string $type,
        ?string $status,
        ?string $period,
        array $keyResults
    ) {
        $this->id = $id ? Uuid::createFromString($id) : Uuid::random();
        $this->title = $title;
        $this->description = $description;
        $this->owner = $owner;
        $this->type = $type;
        $this->status = $status;
        $this->period = $period;
        $this->keyResults = $keyResults;
    }
}
