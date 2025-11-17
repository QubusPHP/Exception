<?php

declare(strict_types=1);

namespace Qubus\Exception\Http;

use Throwable;

class HttpExceptionFactory
{
    public static function make(
        int $status,
        ?string $uri = null,
        string $message = '',
        ?Throwable $previous = null
    ): HttpException {
        return match ($status) {
            400 => new BadRequestHttpException($uri, $message, $previous),
            401 => new UnauthorizedHttpException($uri, $message, $previous),
            403 => new AccessDeniedHttpException($uri, $message, $previous),
            404 => new NotFoundHttpException($uri, $message, $previous),
            405 => new MethodNotAllowedHttpException($uri, $message, $previous),
            409 => new ConflictHttpException($uri, $message, $previous),
            410 => new GoneHttpException($uri, $message, $previous),
            411 => new LengthRequiredHttpException($uri, $message, $previous),
            412 => new PreconditionFailedHttpException($uri, $message, $previous),
            415 => new UnsupportedMediaTypeHttpException($uri, $message, $previous),
            422 => new UnprocessableEntityHttpException($uri, $message, $previous),
            423 => new LockedHttpException($uri, $message, $previous),
            428 => new PreconditionRequiredHttpException($uri, $message, $previous),
            429 => new TooManyRequestsHttpException($uri, $message, $previous),
            503 => new ServiceUnavailableHttpException($uri, $message, $previous),
            default => new InternalErrorHttpException($uri, $message ?: 'Internal Server Error', $previous),
        };
    }
}
