<?php

declare(strict_types=1);

namespace App\Domain\Usecases\PersonalData;

use App\Domain\Models\PersonalDataModel;

interface AddPersonalData
{
    public function add(PersonalDataParams $data): PersonalDataModel;
}