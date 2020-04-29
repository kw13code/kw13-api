<?php

declare(strict_types=1);

namespace App\Presentation\Controllers;

use App\Presentation\Errors\MissingParamError;
use App\Presentation\Helpers\http\HttpErrorHelper;
use App\Presentation\Protocols\Controller;
use App\Presentation\Protocols\HttpRequest;
use App\Presentation\Protocols\HttpResponse;
use Exception;

class AddPersonalDataController implements Controller
{
    public function handle(HttpRequest $httpRequest): HttpResponse
    {
        try {
            if (!isset($httpRequest->body['name'])) {
                return HttpErrorHelper::badRequest(new MissingParamError('name'));
            }
            if (!isset($httpRequest->body['email'])) {
                return HttpErrorHelper::badRequest(new MissingParamError('email'));
            }
            if (!isset($httpRequest->body['password'])) {
                return HttpErrorHelper::badRequest(new MissingParamError('password'));
            }

            // Em caso de sucesso
            return new HttpResponse(0, null);
        } catch (Exception $error) {
            return HttpErrorHelper::serverError($error->getTrace());
        }
    }
}
