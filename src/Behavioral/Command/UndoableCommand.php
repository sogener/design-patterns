<?php

namespace App\Behavioral\Command\Tests;

use App\Behavioral\Command\Command;

interface UndoableCommand extends Command
{
    public function undo();
}