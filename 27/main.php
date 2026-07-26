<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $correct = [];
        $invalid = [];

        for($x = 0; $x < count($nums); $x++){
            if($nums[$x] == $val){
                $invalid[] = "_";
            } else {
                $correct[] = $nums[$x];
            }
        }

        $nums = array_merge($correct, $invalid);

        return count($correct);
    }
}
