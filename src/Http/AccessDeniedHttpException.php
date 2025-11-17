<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

class AccessDeniedHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Forbidden',
        ?Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 403, $previous);
    }
}
