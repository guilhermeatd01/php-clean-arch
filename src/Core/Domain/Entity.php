<?php

namespace Core\Domain;

class Entity
{
    function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }

        $className = get_class($this);
        throw new \Exception("Property $name not found in class $className");
    }
}
