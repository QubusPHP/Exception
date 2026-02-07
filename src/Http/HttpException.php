<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;

class HttpException extends \RuntimeException implements Psr7Exception
{
    public function __construct(
        protected UriInterface|string|null $uri = null,
        string $message = '',
        protected $code = 0,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @inheritDoc
     */
    public function getUri(): UriInterface|string|null
    {
        return $this->uri;
    }
}
