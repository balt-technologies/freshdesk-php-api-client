<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Models\Requesters;

interface RequesterInterface
{
    public function getName(): ?string;

    public function getEmail(): ?string;

    public function getPhone(): ?string;
}
