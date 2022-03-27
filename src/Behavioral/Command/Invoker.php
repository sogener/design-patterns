<?php

namespace App\Behavioral\Command;

/**
 * Invoker использует одну команду, которую ему дают на вход
 */
class Invoker
{
    /**
     * @var Command
     */
    private Command $command;

    /**
     * @param Command $cmd
     * @return void
     */
    public function setCommand(Command $cmd): void
    {
        $this->command = $cmd;
    }

    /**
     * @return void
     */
    public function run(): void
    {
        $this->command->execute();
    }
}