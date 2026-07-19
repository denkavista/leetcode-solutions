<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $stored = [];
        
        foreach($nums as $index => $num){
            if(array_key_exists($num, $stored)){
                return [$index, $stored[$num]];
            }
            
            $stored[$target - $num] = $index;
        }
        
        return $stored;
    }
}