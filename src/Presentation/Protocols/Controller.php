<?php

declare(strict_types=1);

namespace App\Presentation\Protocols;

interface Controller
{
    public function handle(HttpRequest $httpRequest): HttpResponse;
}