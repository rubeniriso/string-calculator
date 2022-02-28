<?php

namespace RubenIriso\StringCalculatorKata;

class StringCalculator
{
    function add(String $number){
        $sum = 0;
        if($number != ""){
            $occurrenceLineJumpComma = strpos($number, ",\n");
            $occurrenceCommaLineJump = strpos($number, "\n,");
            if ($occurrenceLineJumpComma != false){
                return "Number expected but '\n' found at position " . $occurrenceLineJumpComma+1;
            }
            else if ($occurrenceCommaLineJump != false){
                return "Number expected but '\n' found at position " .  $occurrenceCommaLineJump+1;
            }

            $inputArguments = preg_split("/[\n,]/", $number);
            if($inputArguments[3] == ""){
                return "Number expected but NOT found";
            }
            foreach($inputArguments as $index=>$argument){
                $sum = $sum + $argument;
            }
            return $sum;
        }
        return(0);
    }
}