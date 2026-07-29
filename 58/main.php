<?php


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $result = 0;
        $s = trim($s);
        $n = strlen($s);

        while ($n){
            if($s[--$n] == " "){
                return $result;
            }

            $result++;
        }

        return $result;
    }
}
