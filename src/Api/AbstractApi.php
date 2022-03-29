<?php

declare(strict_types=1);

namespace Balt\FreshDesk\Api;

use GuzzleHttp\Psr7\Request;

class AbstractApi implements ApiInterface
{
    protected string $endpoint;

    public function __construct(private ApiClient $client)
    {
    }

    public function list(array $filter = []): array
    {
        $request = new Request(ApiClient::METHOD_GET, $this->getUri($filter));

        $response = $this->client->sendRequest($request);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    private function getUri(array $filter = []): string
    {
        return $this->endpoint;
    }
}
