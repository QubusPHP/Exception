<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

class MethodNotAllowedHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Method Not Allowed',
        ?Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 405, $previous);
    }
}
