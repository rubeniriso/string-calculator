<?php

namespace RubenIriso\StringCalculatorKata;

class StringCalculator
{
    function add(String $number){
        if($number != ""){
            $inputArguments = explode(",", $number);
            $firstNumber = $inputArguments[0];
            if (isset($inputArguments[1])) {
                $secondNumber = $inputArguments[1];
                return $firstNumber + $secondNumber;
            }
            return $firstNumber;
        }
        return(0);
    }
}