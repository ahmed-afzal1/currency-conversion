<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ConversionControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_converted()
    {
        $requestAmount = 20;
        $requestFrom = 86.285473;
        $requestTo = 75.447499;

        $baseCurrencyAmount = $requestAmount/$requestFrom;
        $convertedAmount = $requestTo*$baseCurrencyAmount;

        $this->assertEquals(17.487879796406,$convertedAmount);
    }
}
