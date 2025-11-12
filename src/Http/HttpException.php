<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Qubus\Exception\Exception;
use Throwable;

class HttpException extends Exception implements Psr7Exception
{
    public function __construct(
        protected UriInterface|string|null $uri = null,
        string $message = '',
        ?Throwable $previous = null,
        protected array $headers = [],
        protected $code = 0
    ) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @inheritDoc
     */
    public function getStatusCode(): int
    {
        return $this->code;
    }

    /**
     * @inheritDoc
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @inheritDoc
     */
    public function getUri(): UriInterface|string|null
    {
        return $this->uri;
    }
}
