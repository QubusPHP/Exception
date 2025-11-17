<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

class UnprocessableEntityHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Unprocessable Entity',
        ?Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 422, $previous);
    }
}
