<?php

namespace Balt\FreshDesk\Models\Tickets;

interface TicketInterface
{
    public function getSubject(): string;

    public function getDescription(): string;
}