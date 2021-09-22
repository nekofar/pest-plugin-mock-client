<?php

declare(strict_types=1);

namespace Nekofar\Pest\MockClient;

use Pest\Plugin;

Plugin::uses(ClientTrait::class);

/**
 * @return object|MockClient
 */
function mockClient()
{
    return test()->mockClient();
}
