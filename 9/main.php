<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x < 0){
            return false;
        }
        
        if($x < 9){
            return true;
        }
        
        if($x % 10 == 0){
            return false;
        }
        
        $original = $x;
        $reversed = 0;

        while($x > $reversed){
            $reversed = ($reversed * 10) + $x % 10;
            
            if($reversed == $x){
                return true;
            }
            
            $x = (int) ($x / 10);
        }
        
        return $x == $reversed;
    }
}