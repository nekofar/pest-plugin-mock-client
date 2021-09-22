<?php

declare(strict_types=1);

namespace Nekofar\Pest\MockClient;

/**
 * @internal
 */
trait ClientTrait
{
    /**
     * @var MockClient
     */
    protected $mockClient;

    /**
     * Creates a new mock client or return an existing instance.
     *
     * @return object|MockClient
     */
    public function mockClient()
    {
        return $this->mockClient ?? ($this->mockClient = new MockClient());
    }
}
