<?php

declare(strict_types=1);

namespace Nekofar\Pest\MockClient;

/**
 * @return mixed|MockClient
 */
function mockClient()
{
    return new MockClient();
}
