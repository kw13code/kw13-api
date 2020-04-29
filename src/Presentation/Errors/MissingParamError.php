<?php

declare(strict_types=1);

namespace App\Presentation\Errors;

use Exception;

class MissingParamError extends Exception
{
    public function __construct(string $paramName)
    {
        parent::__construct("Parâmetro $paramName não encontrado");
    }
}
