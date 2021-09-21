<?php

declare(strict_types=1);

namespace Nekofar\Pest\MockClient;

function client(): MockClient
{
    return new MockClient();
}
