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

        $nonEmptyString = "1";

        $result = $stringCalculator->add($nonEmptyString);

        $this->assertEquals($nonEmptyString, $result);
    }
    /**
     * @test
     */
    public function two_arguments_separated_by_comma_should_return_sum(){
        $stringCalculator = new StringCalculator();

        $twoArgumentsSeparatedByComma = "1,2.3";

        $result = $stringCalculator->add($twoArgumentsSeparatedByComma);

        $this->assertEquals(3.3, $result);
    }
}
