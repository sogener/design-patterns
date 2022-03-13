<?php

namespace App\Structural\Registry;

abstract class Registry
{
    /** @var Service[] */
    private static array $services = [];

    public static function set(string $key, Service $value): void
    {
        self::$services[$key] = $value;
    }

    public static function get(string $key): Service
    {
        return self::$services[$key];
    }
}