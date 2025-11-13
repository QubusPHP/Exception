<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

interface Psr7Exception extends Throwable
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null,
    );

    /**
     * Return a string representation of the exception.
     *
     * @return string
     */
    public function __toString();

    /**
     * Return the uri to redirect to.
     */
    public function getUri(): UriInterface|string|null;
}
