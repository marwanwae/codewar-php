<?php

namespace Marwan\CodewarPhp;

/**
 * https://www.codewars.com/kata/56747fd5cb988479af000028/phps
 */

class MiddleCaracter {
    public function getMiddle(string $string) {
        $strMid = strlen($string)/2;
        if( strlen($string)%2 == 0) {
            return $string[$strMid-1].$string[$strMid];
        }else {
            return $string[(int) floor($strMid)];
        }
    }
}