<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Api;

interface ApiInterface
{
    public function list(array $filter = []): array;

    public function getEndpoint(): string;
}
