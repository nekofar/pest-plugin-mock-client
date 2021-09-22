<?php

declare(strict_types=1);

use GuzzleHttp\Psr7\Request;
use Http\Client\Exception\RequestException;
use Http\Message\RequestMatcher\RequestMatcher;
use Psr\Http\Message\ResponseInterface;

use function Nekofar\Pest\MockClient\mockClient;

it('can send multiple requests', function (): void {
    $firstRequest = new Request('GET', '/');
    $secondRequest = new Request('POST', '/');

    mockClient()->sendRequest($firstRequest);
    mockClient()->sendRequest($secondRequest);

    expect(mockClient()->getRequests())->toHaveCount(2);
});

it('can add response', function (): void {
    $request = new Request('GET', '/');

    $response = $this->createMock(ResponseInterface::class);
    mockClient()->addResponse($response);

    $returnedResponse = mockClient()->sendRequest($request);
    assertSame($response, $returnedResponse);
    assertSame($request, mockClient()->getLastRequest());
});

it('can set default response', function (): void {
    $firstRequest = new Request('GET', '/');
    $secondRequest = new Request('POST', '/');

    $response = $this->createMock(ResponseInterface::class);
    mockClient()->setDefaultResponse($response);

    $firstReturnedResponse = mockClient()->sendRequest($firstRequest);
    $secondReturnedResponse = mockClient()->sendRequest($secondRequest);
    assertSame($response, $firstReturnedResponse);
    assertSame($response, $secondReturnedResponse);
});

it('can throw exception', function (): void {
    $request = new Request('GET', '/');

    $exception = new Exception('Whoops!');
    mockClient()->addException($exception);

    mockClient()->sendRequest($request);
})->throws(Exception::class, 'Whoops!'); // phpcs:ignore

it('can throw default exception', function (): void {
    $firstRequest = new Request('GET', '/');
    $secondRequest = new Request('POST', '/');

    $exception = new Exception('Whoops!');
    mockClient()->setDefaultException($exception);

    $response = $this->createMock(ResponseInterface::class);
    mockClient()->addResponse($response);

    // The first request will returns the added response.
    mockClient()->sendRequest($firstRequest);
    // There is no more added response, the default exception will be thrown.
    mockClient()->sendRequest($secondRequest);
})->throws(Exception::class, 'Whoops!'); // phpcs:ignore

it('can send request by request matcher', function (): void {
    $request = new Request('GET', '/');

    $requestMatcher = new RequestMatcher();

    $response = $this->createMock(ResponseInterface::class);
    mockClient()->on($requestMatcher, $response);

    $returnedResponse = mockClient()->sendRequest($request);
    assertSame($response, $returnedResponse);
});

it('can throw exception by request matcher', function (): void {
    $request = new Request('GET', '/');

    $requestMatcher = new RequestMatcher();

    $exception = new RequestException('Whoops!', $request);
    mockClient()->on($requestMatcher, $exception);

    mockClient()->sendRequest($request);
})->throws(RequestException::class, 'Whoops!'); // phpcs:ignore
