<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if(count($strs) == 1 || strlen($strs[0]) < 0){
            return $strs[0];
        }

        $x = 0;
        $y = 0;
        $prefix = "";

        while(true){
            if($y >= strlen($prefix) && isset($strs[$x][$y])){
                $prefix .= $strs[$x][$y];
            }
            
            if(!isset($strs[$x][$y]) || $strs[$x][$y] !== $prefix[$y]){
                if($y < strlen($prefix)){
                    return substr($prefix, 0, -1);
                } else {
                    return $prefix;
                }
            }
            
            $x++;
            if(!isset($strs[$x])){
                $x = 0;
                $y++;
            }
        }

        return $prefix;
    }
}
