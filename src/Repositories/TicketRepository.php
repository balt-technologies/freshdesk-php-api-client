<?php

namespace Balt\FreshDesk\Repositories;

use Balt\FreshDesk\Api\ApiInterface;
use Balt\FreshDesk\Collections\TicketCollectionInterface;
use Balt\FreshDesk\Models\Tickets\TicketInterface;

class TicketRepository implements TicketRepositoryInterface
{
    public function __construct(private ApiInterface $api) {}

    public function list(array $filter = []): TicketCollectionInterface
    {
        $this->api->list($filter);
    }

    public function get(int $id): TicketInterface
    {
        // TODO: Implement get() method.
    }
}