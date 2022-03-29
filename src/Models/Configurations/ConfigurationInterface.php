<?php

namespace Balt\FreshDesk\Models\Configurations;

interface ConfigurationInterface
{
    public function getApiKey(): string;

    public function getDomain(): string;
}