<?php

namespace RubenIriso\StringCalculatorKata;

class StringCalculator
{
    function add(String $number){
        if($number != ""){
            return $number;
        }
        return(0);
    }
}