<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $dict = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        ];

        $result = 0;
        $prev = 0;

        foreach(str_split($s) as $char){
            if(array_key_exists($char, $dict)){
                $number = $dict[$char];
                
                if($number > $prev){
                    $result -= $prev * 2;
                }
                
                $result += $dict[$char];
                $prev = $dict[$char];
            }            
        }

        return $result;
    }
}