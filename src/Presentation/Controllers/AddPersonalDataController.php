<?php

declare(strict_types=1);

namespace App\Presentation\Controllers;

use App\Presentation\Protocols\Controller;
use App\Presentation\Protocols\HttpRequest;
use App\Presentation\Protocols\HttpResponse;

class AddPersonalDataController implements Controller
{
    public function handle(
        HttpRequest $httpRequest
    ): HttpResponse {
        return new HttpResponse(400);
    }
}
