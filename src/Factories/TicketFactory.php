<?php

namespace Balt\FreshDesk\Factories;

use Balt\FreshDesk\Models\Tickets\Ticket;
use Balt\FreshDesk\Models\Tickets\TicketInterface;
use Carbon\CarbonImmutable;

class TicketFactory
{
    public function __construct(private RequesterFactory $requesterFactory)
    {

    }

    public function createFromApi(array $data): TicketInterface
    {
        $requester = $this->requesterFactory->create(email: null, name: null, phone: null);

        return new Ticket(
            id: $data['id'],
            subject: $data['subject'],
            description: $data['description'] ?? null,
            requester: $requester,
            status: $data['status'] ?? null,
            type: $data['type'],
            createdAt: CarbonImmutable::parse($data['created_at']),
            updatedAt: CarbonImmutable::parse($data['updated_at']),
        );

    }

}