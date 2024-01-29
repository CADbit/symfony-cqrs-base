<?php

namespace App\Common\Bus\Command;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command): mixed;

}