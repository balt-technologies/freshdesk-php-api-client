<?php

namespace Balt\FreshDesk\Repositories;

use Balt\FreshDesk\Api\ApiInterface;
use Balt\FreshDesk\Collections\TicketCollection;
use Balt\FreshDesk\Collections\TicketCollectionInterface;
use Balt\FreshDesk\Factories\RequesterFactory;
use Balt\FreshDesk\Factories\TicketFactory;
use Balt\FreshDesk\Models\Tickets\TicketInterface;

class TicketRepository implements TicketRepositoryInterface
{
    public function __construct(
        private ApiInterface $api,
        private TicketFactory $ticketFactory
    ) {}

    public function list(array $filter = []): TicketCollectionInterface
    {
        $tickets = [];
        $rawTickets = $this->api->list($filter);

        foreach($rawTickets as $rawTicket) {
            $tickets[] = $this->ticketFactory->createFromApi($rawTicket);
        }

        return new TicketCollection($tickets);
    }

    public function get(int $id): TicketInterface
    {
        // TODO: Implement get() method.
    }
}