<?php

namespace Balt\FreshDesk\Models\Configurations;

class Configuration implements ConfigurationInterface
{

    public function __construct(private string $apiKey, private string $domain) {}

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }
}