<?php

namespace Marwan\CodewarPhp;

/**
 * https://www.codewars.com/kata/5259b20d6021e9e14c0010d4
 */

class ReverseWord {
    public function reverse(string $word){
        
        $arrayWord = explode(" ", $word);
        $result = "";

        foreach ($arrayWord as $key => $words) {
            if($key == 0){
                $result = strrev($words);
                continue;
            }
            $result = $result . " " . strrev($words);
        }

        return $result;
    }

    public function reverseImplode(string $str) {
        return implode(" ", array_reverse(explode(" ", strrev($str))));
    }
}