<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Api;

use Balt\FreshDesk\Models\Configurations\ConfigurationInterface;
use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ApiClient implements ClientInterface
{
    public const METHOD_GET = 'get';

    public function __construct(private ConfigurationInterface $configuration)
    {
        $this->client = new Client([
            'base_uri' => 'https://'.$this->configuration->getDomain(),
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'auth' => [
                $this->configuration->getApiKey(),
                'X',
            ],
        ]);
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->client->sendRequest($request);
    }
}
