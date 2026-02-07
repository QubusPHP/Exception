<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;

class LengthRequiredHttpException extends HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = 'Length Required',
        ?\Throwable $previous = null
    ) {
        parent::__construct($uri, $message, 411, $previous);
    }
}
