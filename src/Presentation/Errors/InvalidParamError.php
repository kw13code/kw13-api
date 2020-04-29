<?php

declare(strict_types=1);

namespace App\Presentation\Errors;

use Exception;

class InvalidParamError extends Exception
{
    public function __construct(string $paramName)
    {
        parent::__construct("O parametro $paramName é inválido! ");
    }
}
