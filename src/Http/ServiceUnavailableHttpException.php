<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;

class ServiceUnavailableHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Service Unavailable',
        ?\Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 503, $previous);
    }
}
