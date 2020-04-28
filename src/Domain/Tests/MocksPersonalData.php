<?php

declare(strict_types=1);

namespace App\Domain\Tests;

use App\Domain\Models\PersonalData\PersonalDataModel;
use App\Domain\Usecases\PersonalData\PersonalDataParams;

class MocksPersonalData
{
    public function mockPersonalDataModel(): PersonalDataModel
    {
        $personalDataModel = new PersonalDataModel();
        $personalDataModel->id = 1;
        $personalDataModel->name = 'any_name';
        $personalDataModel->function = 'any_function';
        $personalDataModel->birthDate = 'any_birthDate';
        $personalDataModel->email = 'any_email@mail.com';
        $personalDataModel->cellPhone = 'any_cellphone';
        $personalDataModel->phone = 'any_phone';
        $personalDataModel->whatsApp = 'any_whatsApp';
        $personalDataModel->photo = 'any_photo';
        $personalDataModel->cv = 'any_cv';
        $personalDataModel->about = 'any_about';
        $personalDataModel->password = 'any_password';

        return $personalDataModel;
    }

    public function mockPersonalDataParams(): PersonalDataParams
    {
        $personalDataParams = new PersonalDataParams();
        $personalDataParams->name = 'any_name';
        $personalDataParams->function = 'any_function';
        $personalDataParams->birthDate = 'any_birthDate';
        $personalDataParams->email = 'any_email@mail.com';
        $personalDataParams->cellPhone = 'any_cellphone';
        $personalDataParams->phone = 'any_phone';
        $personalDataParams->whatsApp = 'any_whatsApp';
        $personalDataParams->photo = 'any_photo';
        $personalDataParams->cv = 'any_cv';
        $personalDataParams->about = 'any_about';
        $personalDataParams->password = 'any_password';

        return $personalDataParams;
    }
}
