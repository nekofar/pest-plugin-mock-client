<?php

declare(strict_types=1);

namespace Nekofar\Pest\MockClient;

use Http\Mock\Client;
use Psr\Http\Client\ClientInterface;

/**
 * @internal
 *
 * @mixin Client
 */
final class MockClient
{
    /**
     * @var ClientInterface;
     */
    private $client;

    /**
     * Creates a new client instance.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * Proxies calls to the original client object.
     *
     * @param array<int, object|callable|null> $arguments
     *
     * @return void|object|boolean
     */
    public function __call(string $method, array $arguments)
    {
        /* @phpstan-ignore-next-line */
        return $this->client->{$method}(...$arguments);
    }
}
