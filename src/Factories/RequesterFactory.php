<?php

namespace Balt\FreshDesk\Factories;

use Balt\FreshDesk\Models\Requesters\Requester;
use Balt\FreshDesk\Models\Requesters\RequesterInterface;

class RequesterFactory
{
    public function create(
        ?string $email,
        ?string $name,
        ?string $phone
    ): RequesterInterface {
        return new Requester(
            $email,
            $name,
            $phone
        );
    }
}