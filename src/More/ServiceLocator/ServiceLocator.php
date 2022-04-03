<?php

namespace App\More\ServiceLocator;

use http\Exception\InvalidArgumentException;
use OutOfRangeException;

class ServiceLocator
{
    private array $services = [];

    private array $instantiated = [];

    public function addInstance(string $class, Service $service): void
    {
        $this->instantiated[$class] = $service;
    }

    public function addClass(string $class, array $params): void
    {
        $this->services[$class] = $params;
    }

    public function has(string $interface): bool
    {
        return (isset($this->services[$interface]) || isset($this->instantiated[$interface]));
    }

    public function get(string $class): Service
    {
        if (isset($this->instantiated[$class])) {
            return $this->instantiated[$class];
        }

        $args = $this->services[$class];

        $object = match (count($args)) {
            0 => new $class(),
            1 => new $class($args[0]),
            2 => new $class($args[0], [$args[1]]),
            3 => new $class($args[0], $args[1], $args[2]),
            default => throw new OutOfRangeException('To many arguments given'),
        };

        if ($object instanceof Service === false) {
            throw new InvalidArgumentException('Could not register service: is no instance for service');
        }

        $this->instantiated[$class] = $object;

        return $object;
    }
}