<?php

namespace Test;

use Countable;
use PHPUnit\Framework\TestCase;

class SnailArrayTest extends TestCase {
    
    public function snail(array $array): array {
        $result = [];

        while(true) {
            $result = array_merge($result, $array[0]);
            array_splice($array, 0, 1);

            $array = $this->transposeReverse($array);

            if(empty($array)){
                break;
            }
        }

        return $result;
    }

    public function transposeReverse(array $array): array {
        $result = [];
        for($i=0; $i < count($array); $i++) {
            for($j=0; $j < count($array[$i]); $j++) {
                $result[$j][$i] = $array[$i][$j];
            }
        }
        $result = array_reverse($result);
        return $result;
    }

    public function testSnail() {

        $array3 = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];

        $array4 = [
            [1, 2, 3, 0],
            [4, 5, 6, 3],
            [7, 8, 9, 1],
            [7, 8, 9, 2],
        ];

        $this->assertEquals($this->snail($array3), [1,2,3,6,9,8,7,4,5]);
        $this->assertEquals($this->snail($array4), [1,2,3,0,3,1,2,9,8,7,7,4,5,6,9,8]);
    }
}


// [1, 2, 3],
// [4, 5, 6],
// [7, 8, 9]

// [0.0][0.1][0.2]
// [1.0][1.1][1.2]
// [2.0][2.1][2.2]

// [0][0],[0][1],[0][2],[1][2],[2][2],[2][1],[2][0],[1][0],[1][1]


// [0.0][0.1][0.2][0.3]
// [1.0][1.1][1.2][1.3]
// [2.0][2.1][2.2][2.3]
// [3.0][3.1][3.2][3.3]

// [0.0][0.1][0.2][0.3][1.3][2.3][3.3][3.2][3.1][3.0][2.0][1.0][1.1][1.2][2.2][2.1]