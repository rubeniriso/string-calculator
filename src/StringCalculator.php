<?php

namespace RubenIriso\StringCalculatorKata;

class StringCalculator
{
    function add(String $number){
        $sum = 0;
        $errorMessage = "";
        $thereAreErrors = false;
        if($number != ""){
            if (($number[0]) == "/" && ($number[1]) == "/"){
                $lineJumpPosition = strpos($number, "\n");
                $customDelimiter = substr($number, 2, $lineJumpPosition-1);
                $inputArguments = substr($number, $lineJumpPosition+1, (strlen($number)));

                $inputArguments = preg_split("/[$customDelimiter]/", $inputArguments);

                $negativeNumberArray = array_filter($inputArguments, function($x) {
                    return $x < 0 && $x != "";
                });

                if (sizeof($negativeNumberArray)>0){
                    $errorMessage .= "Negative not allowed : " . implode(', ', $negativeNumberArray) . " ";
                    $thereAreErrors = true;
                }
            }
            else {
                $occurrenceLineJumpComma = strpos($number, ",\n");
                $occurrenceCommaLineJump = strpos($number, "\n,");
                if ($occurrenceLineJumpComma != false) {
                    $errorMessage .= "Number expected but '\n' found at position " . $occurrenceLineJumpComma + 1 . " ";
                    $thereAreErrors = true;
                } else if ($occurrenceCommaLineJump != false) {
                    $errorMessage .= "Number expected but '\n' found at position " . $occurrenceCommaLineJump + 1 . " ";
                    $thereAreErrors = true;
                }
                $inputArguments = preg_split("/[\n,]/", $number);

                $positionOfLastElement = sizeof($inputArguments) - 1;

                $negativeNumberArray = array_filter($inputArguments, function($x) {
                    return $x < 0 && $x != "";
                });
                if (sizeof($negativeNumberArray)>0){
                    $errorMessage .= "Negative not allowed : " . implode(', ', $negativeNumberArray) . " ";
                    $thereAreErrors = true;
                }

                if ($inputArguments[$positionOfLastElement] == "") {
                    $errorMessage .= "Number expected but NOT found ";
                    $thereAreErrors = true;

                }
            }
            if ($thereAreErrors){
                return substr($errorMessage, 0, -1);
            }
            foreach ($inputArguments as $index => $argument) {
                $sum = $sum + $argument;
            }
            return $sum;
        }
        return(0);
    }
}