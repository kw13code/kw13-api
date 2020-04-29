<?php

declare(strict_types=1);

namespace App\Presentation\Errors;

use Exception;

class ServerError extends Exception
{
    public function __construct()
    {
        parent::__construct("Erro interno no servidor");
    }
}
