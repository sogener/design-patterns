<?php

namespace App\Behavioral\Command;

use App\Behavioral\Command\Tests\UndoableCommand;

class AddMessageWithDateCommand implements UndoableCommand
{
    public function __construct(private Receiver $output) {}


    public function execute(): void
    {
        /**
         * Иногда, тут нет логики с Receiver
         * И это вся бизнес логика, какой занимается текущая команда.
         */
        $this->output->enableDate();
    }

    public function undo(): void
    {
        /**
         * Иногда, тут нет логики с Receiver
         * И это вся бизнес логика, какой занимается текущая команда.
         */
        $this->output->disableDate();
    }
}