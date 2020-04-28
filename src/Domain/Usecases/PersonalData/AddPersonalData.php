<?php

declare(strict_types=1);

namespace App\Domain\Usecases\PersonalData;

use App\Domain\Models\PersonalData\PersonalDataModel;

interface AddPersonalData
{
    public function add(PersonalDataParams $data): PersonalDataModel;
}
