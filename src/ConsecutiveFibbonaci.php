<?php

namespace Marwan\CodewarPhp;

/**
 * https://www.codewars.com/kata/5541f58a944b85ce6d00006a/php
 */

class ConsecutiveFibbonaci {
    public function explaind(int $number) {
        // 0, 1 , 1, 2, 3, 5, 8, 13, 21, 34, 
        // 2 => [1, 2, true]
        // 4 => [2, 3, false]

        $tempFibb = [0, 1];
        $tempNumber = 0;
        $arayResult = [];
        $i = 0;
        while( $number >= $tempNumber ) {
            $tempFibb[] = $tempFibb[$i] + $tempFibb[$i+1];
            $tempNumber = $tempFibb[$i] * $tempFibb[$i+1];
            
            if($number == $tempNumber) {
                return [$tempFibb[$i], $tempFibb[$i+1], true];
            }
            $arayResult = [$tempFibb[$i], $tempFibb[$i+1], false];
            $i++;
        }

        return $arayResult;
    }

    public function refactor(int $number) {
        $first = 0; // bilangan pertama fibbonaci
        $second = 1; // bilanngan kedua fibbonaci

        while ($first * $second < $number) {
            $next = $first + $second;
            $first = $second;
            $second = $next;
        }

        return [$first, $second, $first * $second == $number];
    }
}