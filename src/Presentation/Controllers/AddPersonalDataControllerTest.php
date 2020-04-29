<?php

namespace App\Presentation\Controllers;

use App\Domain\Models\PersonalData\PersonalDataModel;
use App\Presentation\Errors\InvalidParamError;
use App\Presentation\Errors\MissingParamError;
use App\Presentation\Protocols\EmailValidator;
use App\Presentation\Protocols\HttpRequest;
use PHPUnit\Framework\TestCase;

class AddPersonalDataControllerTest extends TestCase
{
    private function mockEmailValidator(bool $return = true): EmailValidator
    {
        $mockEmailValidator = $this->getMockBuilder(EmailValidator::class)
            ->disableOriginalConstructor()
            ->getMock();
        $mockEmailValidator->method('isValid')->willReturn($return);
        return $mockEmailValidator;
    }

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

    protected function makeSut(): AddPersonalDataController
    {
        return new AddPersonalDataController($this->mockEmailValidator(false));
    }

    public function testDeveRestonar400SeOCampoNameNaoForFornecido(): void
    {
        $sut = $this->makeSut();
        $mockHttpRequest = new HttpRequest(
            [
                'function' => 'any_function',
                'birthDate' => 'any_birthDate',
                'email' => 'any_email@mail.com',
                'cellPhone' => 'any_cellphone',
                'phone' => 'any_phone',
                'whatsApp' => 'any_wjatsApp',
                'photo' => 'any_photo',
                'cv' => 'any_cv',
                'about' => 'any_about',
                'password' => 'any_password',
            ]
        );
        $httpResponse = $sut->handle($mockHttpRequest);
        $this->assertEquals(400, $httpResponse->statusCode);
        $this->assertEquals(new MissingParamError('name'), $httpResponse->body);
    }

    public function testDeveRestonar400SeOCampoEmailNaoForFornecido(): void
    {
        $sut = $this->makeSut();
        $mockHttpRequest = new HttpRequest(
            [
                'name' => 'any_name',
                'function' => 'any_function',
                'birthDate' => 'any_birthDate',
                'cellPhone' => 'any_cellphone',
                'phone' => 'any_phone',
                'whatsApp' => 'any_wjatsApp',
                'photo' => 'any_photo',
                'cv' => 'any_cv',
                'about' => 'any_about',
                'password' => 'any_password',
            ]
        );
        $httpResponse = $sut->handle($mockHttpRequest);
        $this->assertEquals(400, $httpResponse->statusCode);
        $this->assertEquals(new MissingParamError('email'), $httpResponse->body);
    }

    public function testDeveRestonar400SeOCampoPasswordNaoForFornecido(): void
    {
        $sut = $this->makeSut();
        $mockHttpRequest = new HttpRequest(
            [
                'name' => 'any_name',
                'email' => 'any_email@mail.com',
                'function' => 'any_function',
                'birthDate' => 'any_birthDate',
                'cellPhone' => 'any_cellphone',
                'phone' => 'any_phone',
                'whatsApp' => 'any_wjatsApp',
                'photo' => 'any_photo',
                'cv' => 'any_cv',
                'about' => 'any_about',
            ]
        );
        $httpResponse = $sut->handle($mockHttpRequest);
        $this->assertEquals(400, $httpResponse->statusCode);
        $this->assertEquals(new MissingParamError('password'), $httpResponse->body);
    }

    public function testDeveRestonar400SeOEmailNaoForValido(): void
    {
        $sut = $this->makeSut();
        $mockHttpRequest = new HttpRequest(
            [
                'name' => 'any_name',
                'email' => 'invalid_email',
                'function' => 'any_function',
                'birthDate' => 'any_birthDate',
                'cellPhone' => 'any_cellphone',
                'phone' => 'any_phone',
                'whatsApp' => 'any_wjatsApp',
                'photo' => 'any_photo',
                'cv' => 'any_cv',
                'about' => 'any_about',
                'password' => 'any_password'
            ]
        );
        $httpResponse = $sut->handle($mockHttpRequest);
        $this->assertEquals(400, $httpResponse->statusCode);
        $this->assertEquals(new InvalidParamError('email'), $httpResponse->body);
    }
}
