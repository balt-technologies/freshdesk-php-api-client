<?php

namespace Balt\FreshDesk\Api;

interface ApiInterface
{
    public function list(array $filter = []): array;

    public function getEndpoint(): string;

}