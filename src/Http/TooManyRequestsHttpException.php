<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;

class TooManyRequestsHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Too Many Requests',
        ?\Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 429, $previous);
    }
}
