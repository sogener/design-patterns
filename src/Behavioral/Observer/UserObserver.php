<?php

namespace App\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    private array $changedUsers = [];

    public function update(SplSubject $subject): void
    {
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}