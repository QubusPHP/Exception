<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

class UnauthorizedHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Unauthorized',
        ?Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 401, $previous);
    }
}
