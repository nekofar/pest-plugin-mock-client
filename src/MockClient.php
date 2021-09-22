<?php

/*
 * (c) Milad Nekofar <milad@nekofar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nekofar\Pest\MockClient;

use Http\Mock\Client;
use PHPUnit\Framework\Assert as PHPUnit;
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
     * Assert that the client has the expected count of requests at the given.
     */
    public function assertRequestCount(int $count): void
    {
        PHPUnit::assertCount($count, $this->getRequests());
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
