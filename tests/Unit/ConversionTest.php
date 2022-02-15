<?php

namespace Tests\Unit;

use App\Repository\CurrencyRepositoryInterface;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class ConversionTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_api_has_value()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://apilayer.net/api/live?access_key=efe459e8db765f08b29c65ea562c4f9a&source=USD');
        $response = $request->getBody()->getContents();

        $str=str_replace("\r\n","",$response);
        $currencies = json_decode($str, true);


        $this->assertArrayHasKey('USDGBP', $currencies['quotes']);
    }
}
