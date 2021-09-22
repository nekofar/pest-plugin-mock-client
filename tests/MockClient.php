<?php

declare(strict_types=1);

use GuzzleHttp\Psr7\Request;

use function Nekofar\Pest\MockClient\mockClient;

it('can send multiple requests', function (): void {
    $request = new Request('GET', '/');

    mockClient()->sendRequest($request);
    mockClient()->sendRequest($request);

    expect(mockClient()->getRequests())->toHaveCount(2);
});
