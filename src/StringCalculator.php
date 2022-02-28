<?php

namespace RubenIriso\StringCalculatorKata;

class StringCalculator
{
    function add(String $number){
        $sum = 0;
        if($number != ""){
            $inputArguments = preg_split("/[\n,]/", $number);
            foreach($inputArguments as $argument){
                $sum = $sum + $argument;
            }
            return $sum;
        }
        return(0);
    }
}