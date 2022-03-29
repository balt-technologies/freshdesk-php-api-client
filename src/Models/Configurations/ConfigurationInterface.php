<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Models\Configurations;

interface ConfigurationInterface
{
    public function getApiKey(): string;

    public function getDomain(): string;
}
