<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{

    public function __construct()
    {
    }

    function add(string $numbers): int
    {
        if(empty($numbers)){
            return 0;
        }
        if(!str_contains($numbers,',')){
            return intval($numbers);
        }else{
            $numbers = explode(",",str_replace("\n",",",$numbers));
            $result = 0;
            foreach ($numbers as $number){
                $result += intval($number);
            }
            return $result;
        }
    }
}