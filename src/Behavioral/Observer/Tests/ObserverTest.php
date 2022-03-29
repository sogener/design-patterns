<?php

namespace App\Behavioral\Strategy\Tests;

use App\Behavioral\Observer\User;
use App\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testChangeTheUserLeadsToUserObserverBeingNotified(): void {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('sogener@yandex.ru');

        $this->assertCount(1, $observer->getChangedUsers());
    }
}