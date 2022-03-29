<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Repositories;

use Balt\FreshDesk\Collections\TicketCollectionInterface;
use Balt\FreshDesk\Models\Tickets\TicketInterface;

interface TicketRepositoryInterface
{
    public function list(array $filter = []): TicketCollectionInterface;

    public function get(int $id): TicketInterface;
}
