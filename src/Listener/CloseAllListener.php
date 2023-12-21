<?php

declare(strict_types=1);

namespace Imi\ConnectionCenter\Listener;

use Imi\Bean\Annotation\Listener;
use Imi\Cli\Event\CommandEvents;
use Imi\ConnectionCenter\Facade\ConnectionCenter;
use Imi\Event\Contract\IEvent;
use Imi\Event\IEventListener;

#[Listener(eventName: CommandEvents::AFTER_COMMAND)]
class CloseAllListener implements IEventListener
{
    /**
     * {@inheritDoc}
     */
    public function handle(IEvent $e): void
    {
        ConnectionCenter::closeAllConnectionManager();
    }
}
