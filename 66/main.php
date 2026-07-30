<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $add = 0;
        $x = count($digits) - 1;
        
        while($x >= 0){
            if($digits[$x] == 9){
                $add = 1;
                $digits[$x] = 0;
                $x--;
            } else {
                $add = 0;
                $digits[$x] = $digits[$x] + 1;
                break;
            }
        }

        if($add > 0){
            array_unshift($digits, 1);
        }

        return $digits;
    }
}
