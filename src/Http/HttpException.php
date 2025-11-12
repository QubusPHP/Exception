<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Psr\Http\Message\UriInterface;
use Throwable;

interface HttpException
{
    public function __construct(
        UriInterface|string|null $uri = null,
        string $message = '',
        ?Throwable $previous = null,
        array $headers = [],
        int $code = 0
    );

    /**
     * Return a string representation of the exception.
     *
     * @return string
     */
    public function __toString();

    /**
     * Return the exception message.
     *
     * @return string
     */
    public function getMessage(): string;

    /**
     * Return the previous exception.
     *
     * @return Throwable
     */
    public function getPrevious(): Throwable;

    /**
     * Return the exception code.
     *
     * @return mixed
     */
    public function getCode(): mixed;

    /**
     * Return the file in which the exception was created.
     *
     * @return string
     */
    public function getFile(): string;

    /**
     * Return the line in which the exception was created.
     *
     * @return int
     */
    public function getLine(): int;

    /**
     * Return the stack trace.
     *
     * @return array
     */
    public function getTrace(): array;

    /**
     * Return the stack trace as a string.
     *
     * @return string
     */
    public function getTraceAsString(): string;

    /**
     * Return the status code.
     */
    public function getStatusCode(): int;

    /**
     * Return the response headers.
     */
    public function getHeaders(): array;

    /**
     * Return the uri to redirect to.
     */
    public function getUri(): UriInterface|string|null;
}
