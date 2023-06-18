<?php

namespace Marwan\CodewarPhp;

/**
 * https://www.codewars.com/kata/52597aa56021e91c93000cb0/php
 */

class MovingZeros {
    public function move(array $array) {

        $result = [];
        $arrayZero = [];

        foreach($array as $value){
            if($value === 0 || $value === (float) 0 ){
                $arrayZero[] = (int) $value;
            }else {
                $result[] = $value;
            }
        }
        return array_merge($result, $arrayZero);
    }
}