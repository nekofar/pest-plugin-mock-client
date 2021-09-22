<?php

declare(strict_types=1);

namespace Nekofar\Pest\MockClient;

use Pest\Plugin;

Plugin::uses(ClientTrait::class);

/**
 * @return mixed|MockClient
 */
function mockClient()
{
    return test()->mockClient();
}
