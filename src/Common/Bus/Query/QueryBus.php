<?php

namespace App\Common\Bus\Query;

use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Symfony\Component\Messenger\Stamp\StampInterface;

class QueryBus implements QueryBusInterface
{
    public function __construct(
        private readonly MessageBusInterface $bus
    )
    {

    }

    public function dispatch(QueryInterface $query): mixed
    {
        $envelope = $this->bus->dispatch($query);

        return $envelope->last(HandledStamp::class)->getResult();
    }
}