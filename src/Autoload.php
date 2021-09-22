<?php

declare(strict_types=1);

namespace Nekofar\Pest\MockClient;

use Pest\Plugin;

Plugin::uses(ClientTrait::class);

/**
 * Creates a new mock client or return an existing instance.
 *
 * @return object|MockClient
 */
function mockClient()
{
    return test()->mockClient();
}
