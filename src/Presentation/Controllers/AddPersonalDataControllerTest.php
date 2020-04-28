<?php

namespace App\Presentation\Controllers;

use App\Domain\Tests\MocksPersonalData;
use App\Presentation\Protocols\HttpRequest;
use PHPUnit\Framework\TestCase;

class AddPersonalDataControllerTest extends TestCase
{
    protected function mockHttpRequest(): HttpRequest
    {
        $mockPersonalData = new MocksPersonalData();

        return new HttpRequest(
            array($mockPersonalData->mockPersonalDataParams())
        );
    }

    protected function makeSut(): AddPersonalDataController
    {
        return new AddPersonalDataController();
    }

    public function testDeveRestonar400SeOCampoNameNaoForFornecido(): void
    {
        $sut = $this->makeSut();
        $mockHttpRequest = $this->mockHttpRequest();
        $mockHttpRequest->body['name'] = '';
        $httpResponse = $sut->handle($mockHttpRequest);
        $this->assertEquals(400, $httpResponse->statusCode);
    }
}
