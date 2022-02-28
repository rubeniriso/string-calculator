<?php

declare(strict_types=1);

namespace RubenIriso\StringCalculatorKata\Test;

use RubenIriso\StringCalculatorKata\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function no_arguments_should_return_0()
    {
        $stringCalculator = new StringCalculator();

        $emptyString = "";

        $result = $stringCalculator->add($emptyString);

        $this->assertEquals(0, $result);
    }
    /**
     * @test
     */
    public function non_zero_argument_should_return_itself()
    {
        $stringCalculator = new StringCalculator();

        $emptyString = "1";

        $result = $stringCalculator->add($emptyString);

        $this->assertEquals($emptyString, $result);
    }

}
