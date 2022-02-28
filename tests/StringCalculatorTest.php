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
    /**
     * @test
     */
    public function five_arguments_separated_by_comma_should_return_sum(){
        $stringCalculator = new StringCalculator();

        $twoArgumentsSeparatedByComma = "1,2,3,4,5.5";

        $result = $stringCalculator->add($twoArgumentsSeparatedByComma);

        $this->assertEquals(15.5, $result);
    }
    /**
     * @test
     */
    public function arguments_separated_by_linejump_or_comma_should_return_sum(){
        $stringCalculator = new StringCalculator();

        $twoArgumentsSeparatedByComma = "1,2\n3,4\n5.5";

        $result = $stringCalculator->add($twoArgumentsSeparatedByComma);

        $this->assertEquals(15.5, $result);
    }
    /**
     * @test
     */
    public function arguments_separated_by_linejump_and_comma_consecutively_is_erroneous(){
        $stringCalculator = new StringCalculator();

        $twoArgumentsSeparatedByComma = "175.2,\n35";

        $result = $stringCalculator->add($twoArgumentsSeparatedByComma);

        $this->assertEquals("Number expected but '\n' found at position 6", $result);
    }

}
