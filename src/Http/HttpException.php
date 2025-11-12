<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

interface HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = '',
        ?Throwable $previous = null,
        array $headers = [],
        int $code = 0
    );

    /**
     * Return a string representation of the exception.
     *
     * @return string
     */
    public function __toString();

    /**
     * Return the status code.
     */
    public function getStatusCode(): int;

    /**
     * Return the response headers.
     */
    public function getHeaders(): array;

    /**
     * Return the uri to redirect to.
     */
    public function getUri(): UriInterface|string|null;
}
