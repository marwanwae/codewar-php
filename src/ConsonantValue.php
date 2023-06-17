<?php

namespace Marwan\CodewarPhp;

/**
 * https://www.codewars.com/kata/59c633e7dcc4053512000073/php
 */

class ConsonantValue {
    public function mySolve(string $string): int {
        $string = strtolower($string);
        $arrayValue = [];
        $arrayTemp = [];

        for ($i = 0; $i < strlen($string); $i++){

            if ($string[$i] == "a" || $string[$i] == "i" || $string[$i] == "u" || $string[$i] == "e" || $string[$i] == "o") {
                $arrayValue[] = $arrayTemp;
                $arrayTemp = [];
                continue;
            }

            $arrayTemp[] = $string[$i];
            
            if ($i == strlen($string)-1) {
                $arrayValue[] = $arrayTemp;
            }
        }
        $arrayCount = [];
        foreach ($arrayValue as $values) {
            $count = 0;
            $abjat = [
                "a" => 1,
                "b" => 2,
                "c" => 3,
                "d" => 4,
                "e" => 5,
                "f" => 6,
                "g" => 7,
                "h" => 8,
                "i" => 9,
                "j" => 10,
                "k" => 11,
                "l" => 12,
                "m" => 13,
                "n" => 14,
                "o" => 15,
                "p" => 16,
                "q" => 17,
                "r" => 18,
                "s" => 19,
                "t" => 20,
                "u" => 21,
                "v" => 22,
                "w" => 23,
                "x" => 24,
                "y" => 25,
                "z" => 26,
            ];
            foreach ($values as $value) {
                $count = $count + $abjat[$value];
            }
            $arrayCount[] = $count;
        }

        return max($arrayCount);
    }

    public function bestSolve(string $s) {

        $arrayTemp = array_map(function ($v){

            $sum = array_sum(
                array_map(function($v1){
                    return ord($v1) - 96;
                }, 
                str_split($v))
            );
                
            return $sum;
        }, preg_split('/[aeiou]/', $s));
    
        $max = max($arrayTemp);
        
        return $max;
    }

    public function refactorSolve(string $string): int {
        $string = strtolower($string); // convert menjadi lowercase
        $arrayValue = preg_split('/[aiueo]/', $string); // pecah string menjadi array dengan aiueo sebagai pembatas
        $arrayCount = []; // penampung total count setiap pecahan string
        foreach ($arrayValue as $value) {
            $count = 0;
            for ($i = 0; $i < strlen($value); $i++){ // setiap string dilooping satu satu
                $count = $count + (ord($value[$i]) - 96); // ord() untuk merubah string menjadi nilai ASCII
            }
            $arrayCount[] = $count;
        }
        return max($arrayCount); // max() mereturn nilai terbesar dari array
    }
}