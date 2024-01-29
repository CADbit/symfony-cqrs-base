<?php

namespace App\Common\Bus\Command;

use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;

class CommandBus implements CommandBusInterface
{
    public function __construct(
        private readonly MessageBusInterface $bus
    )
    {

    }

    public function dispatch(CommandInterface $command): mixed
    {
        $envelope = $this->bus->dispatch($command);

        return $envelope->last(HandledStamp::class)->getResult();
    }
}