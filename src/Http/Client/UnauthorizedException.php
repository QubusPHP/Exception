<?php

declare(strict_types=1);

namespace Qubus\Exception\Http\Client;

use Qubus\Exception\Exception;

class UnauthorizedException extends Exception
{
    public function __construct(
        ?string $message = 'The request requires user authentication.',
        $code = 401,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
