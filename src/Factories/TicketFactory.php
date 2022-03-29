<?php

namespace Balt\FreshDesk\Factories;

use Balt\FreshDesk\Models\Tickets\TicketInterface;

class TicketFactory
{
    public function __construct(private RequesterFactory $factory) {

    }

    public function createFromApi(array $data): TicketInterface {


    }

}