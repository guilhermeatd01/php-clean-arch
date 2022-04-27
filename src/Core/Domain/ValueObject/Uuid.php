<?php

namespace Core\Domain\ValueObject;

use Core\Domain\Exception\DomainException;
use Ramsey\Uuid\Uuid as RamseyUuid;

class Uuid
{
    protected string $uuid;

    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }

    public function __toString(): string
    {
        return $this->uuid;
    }

    public static function random(): Uuid
    {
        return new self(RamseyUuid::uuid4()->toString());
    }

    public static function createFromString(string $uuid): Uuid
    {
        return new self($uuid);
    }
}
