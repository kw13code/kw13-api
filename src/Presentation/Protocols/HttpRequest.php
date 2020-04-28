<?php

declare(strict_types=1);

namespace App\Presentation\Protocols;

class HttpRequest
{
    public array $body;
    public array $headers;

    public function __construct(array $body = [], array $headers = [])
    {
        $this->body = $body;
        $this->headers = $headers;
    }


}
