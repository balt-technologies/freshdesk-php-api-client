<?php

namespace Balt\FreshDesk\Collections;

use Balt\FreshDesk\Models\Tickets\TicketInterface;

class TicketCollection implements TicketCollectionInterface
{
    /**
     * @param TicketInterface[] $tickets
     */
    public function __construct(private array $tickets) {}

    /**
     * @return TicketInterface[]
     */
    public function all() : array
    {
        return $this->tickets;
    }
}