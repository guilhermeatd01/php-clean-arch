<?php

namespace Core\Domain\Adapters;

class UuidAdapterFactory
{
    protected UuidAdapter $adapter;

    public function __construct(UuidAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function create(): UuidAdapter
    {
        return $this->adapter;
    }
}
