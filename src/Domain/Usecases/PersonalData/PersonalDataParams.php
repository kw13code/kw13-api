<?php

declare(strict_types=1);

namespace App\Domain\Usecases\PersonalData;

class PersonalDataParams
{
    public string $function;
    public string $birthDate;
    public string $email;
    public string $cellPhone;
    public string $phone;
    public string $whatsApp;
    public string $photo;
    public string $cv;
    public string $about;
    public string $password;
}
