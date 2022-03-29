<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Collections;

use Balt\FreshDesk\Models\Tickets\TicketInterface;

class TicketCollection implements TicketCollectionInterface
{
    /**
     * @param array<TicketInterface> $tickets
     */
    public function __construct(private array $tickets)
    {
    }

    /**
     * @return array<TicketInterface>
     */
    public function all(): array
    {
        return $this->tickets;
    }
}
