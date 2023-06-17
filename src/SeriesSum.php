<?php

namespace Marwan\CodewarPhp;

/**
 * https://www.codewars.com/kata/555eded1ad94b00403000071/php
 */

class SeriesSum {
    public function seriesSum(int $number) {
        $penyebut = 1;
        $result = 0;
        for($i = 1; $i <= $number; $i++ ) {
            $result = $result + 1/$penyebut;
            $penyebut = $penyebut+3;
        } 
        return number_format($result, 2);
    }
}