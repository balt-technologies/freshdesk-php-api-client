<?php

namespace Balt\FreshDesk\Models\Tickets;

use Balt\FreshDesk\Models\Requesters\RequesterInterface;
use DateTimeImmutable;

class Ticket implements TicketInterface
{
    public function __construct(
        private int $id,
        private string $subject,
        private string $description,
        private RequesterInterface $requester,
        private int $status,
        private string $type,
        private DateTimeImmutable $createdAt,
        private DateTimeImmutable $updatedAt
    ) {}


    public function getId(): int
    {
        return $this->id;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCreated(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUpdated(): DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function getRequester(): RequesterInterface
    {
        return $this->requester;
    }
}