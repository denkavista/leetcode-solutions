<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        
        if($target <= $nums[0]) return 0;
        
        $size = count($nums);
        
        $low = 0;
        $high = $size - 1;
        $mid = (int) ($size / 2);
        
        if($target > ($max = $nums[$size - 1])) return $size;
        if($target == $nums[$size - 1]) return $size - 1;
        
        while ($high > $low){
            
            if($target == $nums[$mid]){
                return $mid;
            } else if($target > $nums[$mid]){
                $low = $mid;
            } else {
                $high = $mid;
            }
            
            if($high - $low == 1){
                return $target <= $nums[$mid] ? $mid : $mid + 1;
            }
            
            $mid = $low + (int) (($high - $low) / 2);
        }
    }
}
