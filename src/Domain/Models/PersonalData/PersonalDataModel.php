<?php

declare(strict_types=1);

namespace App\Domain\Models\PersonalData;

/**
 * Class PersonalDataModel
 * @package App\Domain\Models\PersonalData
 */
class PersonalDataModel
{
    public int $id;
    public string $name;
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

    /**
     * PersonalDataModel constructor.
     * @param int $id
     * @param string $name
     * @param string $function
     * @param string $birthDate
     * @param string $email
     * @param string $cellPhone
     * @param string $phone
     * @param string $whatsApp
     * @param string $photo
     * @param string $cv
     * @param string $about
     * @param string $password
     */
    public function __construct(
        int $id,
        string $name,
        string $function,
        string $birthDate,
        string $email,
        string $cellPhone,
        string $phone,
        string $whatsApp,
        string $photo,
        string $cv,
        string $about,
        string $password
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->function = $function;
        $this->birthDate = $birthDate;
        $this->email = $email;
        $this->cellPhone = $cellPhone;
        $this->phone = $phone;
        $this->whatsApp = $whatsApp;
        $this->photo = $photo;
        $this->cv = $cv;
        $this->about = $about;
        $this->password = $password;
    }
}
