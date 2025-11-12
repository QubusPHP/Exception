<?php

declare(strict_types=1);

namespace Qubus\Exception;

use Throwable;

use function sprintf;

/**
 * Qubus Exception Class
 *
 * This extends the default `BaseException` class to allow converting
 * exceptions to and from `Error` objects.
 *
 * Unfortunately, because an `Error` object may contain multiple messages and error
 * codes, only the first message for the first error code in the instance will be
 * accessible through the exception's methods.
 */
class Exception extends \Exception
{
    /**
     * Exception message.
     *
     * @var string
     */
    protected $message = 'Unknown exception.';

    /**
     * Source filename of exception.
     *
     * @var string
     */
    protected string $file = '';

    /**
     * Source line of exception.
     *
     * @var int
     */
    protected int $line;

    /**
     * @throws Exception
     */
    public function __construct(?string $message = '', int $code = 0, ?Throwable $previous = null)
    {
        if (! $message) {
            throw new self(
                sprintf(
                    'Unknown %s',
                    static::class
                )
            );
        }
        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string
    {
        return static::class . sprintf(
            ' %s in %s(%s)',
            $this->message,
            $this->file,
            $this->line,
        ) . "\n" . sprintf('%s', $this->getTraceAsString());
    }
}
