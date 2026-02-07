<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;

class UnsupportedMediaTypeHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Unsupported Media Type',
        ?\Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 415, $previous);
    }
}
