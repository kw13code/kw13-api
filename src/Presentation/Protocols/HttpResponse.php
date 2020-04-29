<?php

declare(strict_types=1);

namespace App\Presentation\Protocols;

class HttpResponse
{
    public int $statusCode;
    public ?object $body;

    public function __construct(int $statusCode, ?object $body)
    {
        $this->statusCode = $statusCode;
        $this->body = $body;
    }
}
