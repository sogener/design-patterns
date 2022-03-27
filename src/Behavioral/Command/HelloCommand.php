<?php

namespace App\Behavioral\Command;

/**
 * Конкретная команда, которая сохраняет сообщение
 */
class HelloCommand implements Command
{
    /**
     * @param Receiver $output
     */
    public function __construct(private Receiver $output) {}

    /**
     * @return void
     */
    public function execute(): void
    {
        $this->output->write('Hello yopta');
    }
}