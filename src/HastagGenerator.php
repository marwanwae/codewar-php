<?php

namespace Marwan\CodewarPhp;

/**
 * https://www.codewars.com/kata/52449b062fb80683ec000024/php
 */

class HastagGenerator {
    public function generateHastag(string $string) {
        $result = "#". implode("", explode(" ", (ucwords(trim($string)))));
        return strlen($result) == 1 || strlen($result) > 140 ? false : $result;
    }
}