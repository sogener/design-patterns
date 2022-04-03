<?php

namespace App\Structural\DependencyInjection\Tests;

use App\Structural\DependencyInjection\DatabaseConfiguration;
use App\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection(): void
    {
        $config = new DatabaseConfiguration('root123', '3306', 'localhost', 'admin');

        $connection = new DatabaseConnection($config);

        $this->assertSame('admin:root123@localhost:3306', $connection->getDsn());
    }
}