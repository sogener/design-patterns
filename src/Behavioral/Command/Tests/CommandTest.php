<?php

namespace App\Behavioral\Command\Tests;

use App\Behavioral\Command\HelloCommand;
use App\Behavioral\Command\Invoker;
use App\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand(): void
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertSame('Hello yopta', $receiver->getOutput());
    }
}