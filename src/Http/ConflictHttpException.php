<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

class ConflictHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Conflict',
        ?Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 409, $previous);
    }
}
