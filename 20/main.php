<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $map = [
            "(" => ")",
            "[" => "]",
            "{" => "}"
        ];
        
        $needed = [];
        $result = true;
        
        for($x = 0; $x < strlen($s); $x++){
            $char = $s[$x];
            if(array_key_exists($char, $map)){
                $needed[] = $map[$char];
                $result = false;
            } else {
                $required = array_pop($needed);
                if($char != $required){
                    return false;
                }
            }
        }
        
        return !isset($needed[0]);
    }
}
