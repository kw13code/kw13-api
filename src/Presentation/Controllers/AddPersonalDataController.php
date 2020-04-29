<?php

declare(strict_types=1);

namespace App\Presentation\Controllers;

use App\Presentation\Protocols\Controller;
use App\Presentation\Protocols\HttpRequest;
use App\Presentation\Protocols\HttpResponse;

class AddPersonalDataController implements Controller
{
    public function handle(HttpRequest $httpRequest): HttpResponse
    {
        if (!isset($httpRequest->body['name'])) {
            return new HttpResponse(400, null);
        }
        if (!isset($httpRequest->body['function'])) {
            return new HttpResponse(400, null);
        }
        return new HttpResponse(0, null);
    }
}
