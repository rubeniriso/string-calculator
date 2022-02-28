<?php

namespace RubenIriso\StringCalculatorKata;

class StringCalculator
{
    function add(String $number){
        $sum = 0;
        if($number != ""){
            if (($number[0]) == "/" && ($number[1]) == "/"){
                $lineJumpPosition = strpos($number, "\n");
                $delimiter = substr($number, 2, $lineJumpPosition-1);
                $inputArguments = substr($number, $lineJumpPosition+1, (strlen($number)));

                $inputArguments = preg_split("/[$delimiter]/", $inputArguments);

                foreach ($inputArguments as $index => $argument) {
                    $sum = $sum + $argument;
                }
                return $sum;
            }
            else {
                $occurrenceLineJumpComma = strpos($number, ",\n");
                $occurrenceCommaLineJump = strpos($number, "\n,");
                if ($occurrenceLineJumpComma != false) {
                    return "Number expected but '\n' found at position " . $occurrenceLineJumpComma + 1;
                } else if ($occurrenceCommaLineJump != false) {
                    return "Number expected but '\n' found at position " . $occurrenceCommaLineJump + 1;
                }

                $inputArguments = preg_split("/[\n,]/", $number);

                $positionOfLastElement = sizeof($inputArguments) - 1;

                if ($inputArguments[$positionOfLastElement] == "") {
                    return "Number expected but NOT found";
                }
                foreach ($inputArguments as $index => $argument) {
                    $sum = $sum + $argument;
                }
                return $sum;
            }
        }
        return(0);
    }
}