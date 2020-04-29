<?php

namespace App\Presentation\Controllers;

use App\Domain\Models\PersonalData\PersonalDataModel;
use App\Domain\Tests\MocksPersonalData;
use App\Presentation\Protocols\HttpRequest;
use PHPUnit\Framework\TestCase;

class AddPersonalDataControllerTest extends TestCase
{
    private function mockPersonalDataModel(): PersonalDataModel
    {
        return new PersonalDataModel(
            1,
            'any_name',
            'any_function',
            '06/04/1981',
            'any_email@mail.com',
            'any_cellphone',
            'any_phone',
            'any_whatsapp',
            'any_photo',
            'any_cv',
            'any_about',
            'any_password'
        );
    }

    private function mockHttpRequest(): HttpRequest
    {
        return new HttpRequest(
            [
                "name" => 'any_name',
                "function" => 'any_function',
                "birthDate" => 'any_birthDate',
                "email" => 'any_email@mail.com',
                "cellPhone" => 'any_cellphone',
                "phone" => 'any_phone',
                "whatsApp" => 'any_wjatsApp',
                "photo" => 'any_photo',
                "cv" => 'any_cv',
                "about" => 'any_about',
                "password" => 'any_password',
            ]
        );
    }
//    protected function mockHttpRequest(): HttpRequest
//    {
//        $mockPersonalData = new MocksPersonalData();
//
//        return new HttpRequest(
//            array($mockPersonalData->mockPersonalDataParams())
//        );
//    }

    protected function makeSut(): AddPersonalDataController
    {
        return new AddPersonalDataController();
    }

    public function testDeveRestonar400SeOCampoNameNaoForFornecido(): void
    {
        $sut = $this->makeSut();
        $mockHttpRequest = new HttpRequest(
            [
                "function" => 'any_function',
                "birthDate" => 'any_birthDate',
                "email" => 'any_email@mail.com',
                "cellPhone" => 'any_cellphone',
                "phone" => 'any_phone',
                "whatsApp" => 'any_wjatsApp',
                "photo" => 'any_photo',
                "cv" => 'any_cv',
                "about" => 'any_about',
                "password" => 'any_password',
            ]
        );
        $httpResponse = $sut->handle($mockHttpRequest);
        $this->assertEquals(400, $httpResponse->statusCode);
    }

    public function testDeveRestonar400SeOCampoFunctionNaoForFornecido(): void
    {
        $sut = $this->makeSut();
        $mockHttpRequest = new HttpRequest(
            [
                "name" => 'any_name',
                "birthDate" => 'any_birthDate',
                "email" => 'any_email@mail.com',
                "cellPhone" => 'any_cellphone',
                "phone" => 'any_phone',
                "whatsApp" => 'any_wjatsApp',
                "photo" => 'any_photo',
                "cv" => 'any_cv',
                "about" => 'any_about',
                "password" => 'any_password',
            ]
        );
        $httpResponse = $sut->handle($mockHttpRequest);
        $this->assertEquals(400, $httpResponse->statusCode);
    }

//    public function testDeveRetornar500SempreQueHouverUmaException(): void
//    {
//    }
}
