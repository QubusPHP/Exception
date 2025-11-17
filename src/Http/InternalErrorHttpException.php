<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

class InternalErrorHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Internal Server Error',
        ?Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 500, $previous);
    }
}
