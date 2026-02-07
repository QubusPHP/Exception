<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;

class NotFoundHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Not Found',
        ?\Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 404, $previous);
    }
}
