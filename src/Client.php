<?php

namespace Nekofar\Pest\MockClient;

/**
 * @internal
 */
trait Client
{
    /**
     * @var MockClient
     */
    protected $mockClient;

    /**
     * @return MockClient
     */
    public function mockClient()
    {
        return $this->mockClient ?? ($this->mockClient = new MockClient());
    }
}
