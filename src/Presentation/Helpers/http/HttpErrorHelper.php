<?php

declare(strict_types=1);

namespace App\Presentation\Helpers\http;

use App\Presentation\Protocols\HttpResponse;
use Exception;

class HttpErrorHelper
{
    /**
     * @param Exception $error
     * @return HttpResponse
     */
    public static function badRequest(Exception $error): HttpResponse
    {
        return new HttpResponse(400, $error);
    }

    /**
     * @param array $errorTrace
     * @return HttpResponse
     */
    public static function serverError(array $errorTrace): HttpResponse
    {
        return new HttpResponse(500, (object)$errorTrace);
    }

    public static function invalidParamError(Exception $error): HttpResponse
    {
        return new HttpResponse(400, $error);
    }

}
