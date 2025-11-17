<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

class BadRequestHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Bad Request',
        ?Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 400, $previous);
    }
}
