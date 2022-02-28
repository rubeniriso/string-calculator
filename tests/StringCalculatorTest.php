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

        $fiveArgumentsSeparatedByComma = "1,2,3,4,5.5";

        $result = $stringCalculator->add($fiveArgumentsSeparatedByComma);

        $this->assertEquals(15.5, $result);
    }
    /**
     * @test
     */
    public function arguments_separated_by_linejump_or_comma_should_return_sum(){
        $stringCalculator = new StringCalculator();

        $argumentsSeparatedByLinejumpOrComma = "1,2\n3,4\n5.5";

        $result = $stringCalculator->add($argumentsSeparatedByLinejumpOrComma);

        $this->assertEquals(15.5, $result);
    }
    /**
     * @test
     */
    public function arguments_separated_by_linejump_and_comma_consecutively_is_erroneous(){
        $stringCalculator = new StringCalculator();

        $argumentsSeparatedByLinejumpOrCommaConsecutively = "175.2,\n35";

        $result = $stringCalculator->add($argumentsSeparatedByLinejumpOrCommaConsecutively);

        $this->assertEquals("Number expected but '\n' found at position 6", $result);
    }
    /**
     * @test
     */
    public function an_argument_missing_at_the_end_is_invalid(){
        $stringCalculator = new StringCalculator();

        $argumentsButOneIsMissingAtTheEnd = "1,2,3,";

        $result = $stringCalculator->add($argumentsButOneIsMissingAtTheEnd);

        $this->assertEquals("Number expected but NOT found", $result);
    }
    /**
     * @test
     */
    public function inputting_two_forward_bars_at_the_start_should_let_you_set_a_delimiter(){
        $stringCalculator = new StringCalculator();

        $argumentsWithCustomDelimiter = "//;\n1;2;3";

        $result = $stringCalculator->add($argumentsWithCustomDelimiter);

        $this->assertEquals(6, $result);
    }
    /**
     * @test
     */
    public function negative_arguments_should_be_erroneous(){
        $stringCalculator = new StringCalculator();

        $negativeNumberArguments = "-3,-4,-5";

        $result = $stringCalculator->add($negativeNumberArguments);

        $this->assertEquals("Negative not allowed : -3, -4, -5", $result);
    }
    /**
     * @test
     */
    public function more_than_one_error_returns_all_errors(){
        $stringCalculator = new StringCalculator();

        $negativeNumberArguments = "-3,-4,-5,";

        $result = $stringCalculator->add($negativeNumberArguments);

        $this->assertEquals("Negative not allowed : -3, -4, -5 Number expected but NOT found", $result);
    }
}
