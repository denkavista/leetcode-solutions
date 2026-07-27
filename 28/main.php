<?php


class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $length = strlen($needle);
        $first_char = $needle[0];
        $x = 0;

        for($step = 1; $step <= strlen($needle); $step++){
            if($first_char == $needle[$step]){
                break;
            }
        }

        while($x <= strlen($haystack)){
            if($haystack[$x] !== $first_char){
                $x++;
                continue;
            }

            if(substr($haystack, $x, $length) == $needle){
                return $x;
            }

            $x += $step;
        }

        return -1;
    }
}
