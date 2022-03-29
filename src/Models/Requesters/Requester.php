<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Models\Requesters;

class Requester implements RequesterInterface
{
    public function __construct(
        private ?string $email,
        private ?string $name,
        private ?string $phone
    ) {
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }
}
