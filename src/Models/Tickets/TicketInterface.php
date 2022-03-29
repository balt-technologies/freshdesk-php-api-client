<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Models\Tickets;

use Balt\FreshDesk\Models\Requesters\RequesterInterface;
use DateTimeImmutable;

interface TicketInterface
{
    public function getId(): int;

    public function getSubject(): string;

    public function getDescription(): ?string;

    public function getStatus(): int;

    public function getType(): ?string;

    public function getCreated(): DateTimeImmutable;

    public function getUpdated(): DateTimeImmutable;

    public function getRequester(): RequesterInterface;
}
