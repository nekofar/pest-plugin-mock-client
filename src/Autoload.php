<?php

/*
 * (c) Milad Nekofar <milad@nekofar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
