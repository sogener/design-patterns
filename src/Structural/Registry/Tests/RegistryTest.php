<?php

namespace App\Structural\Registry\Tests;

use App\Structural\Registry\Registry;
use App\Structural\Registry\Service;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    private Service $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetData(): void
    {
        Registry::set('key-1', $this->service);

        $this->assertSame($this->service, Registry::get('key-1'));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey(): void
    {
        $this->expectException(\TypeError::class);

        Registry::set(null, $this->service);
    }

    public function testThrowsExceptionWhenTryingToGetNotSetKey(): void
    {
        $this->expectWarning();

        Registry::get('keyDoesNotExists');
    }
}