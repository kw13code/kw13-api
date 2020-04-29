<?php

declare(strict_types=1);

namespace App\Presentation\Protocols;

interface EmailValidator
{
    public function isValid(string $email): bool;
}
