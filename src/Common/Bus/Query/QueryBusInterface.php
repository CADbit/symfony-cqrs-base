<?php

namespace App\Common\Bus\Query;

interface QueryBusInterface
{
    public function dispatch(QueryInterface $query): mixed;
}