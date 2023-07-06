<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class TransposeTest extends TestCase {
    
    public function transpose (array $array): array {
        $result = [];
        for($i=0; $i < count($array); $i++) {
            for($j=0; $j < count($array[$i]); $j++) {
                $result[$i][$j] = $array[$j][$i];
            }
        }
        return $result;
    }

    public function transposeForeach(array $array): array {
        $result = [];

        foreach($array as $i => $values) {
            foreach($values as $j => $value) {
                $result[$j][$i] = $value;
            }
        }
        var_dump(array_reverse($result));
        return $result;
    }

    public function test_transpose() {
        $case1 = [
            [1, 2],
            [3, 4]
        ];

        $case2 = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];

        $case3 = [
            [1, 2, 3],
            [4, 5, 6]
        ];

        $result1 = [
            [1,3],
            [2,4]
        ];

        $result2= [
            [1,4,7],
            [2,5,8],
            [3,6,9]
        ];

        $result3 = [
            [1, 4],
            [2, 5],
            [3, 6]
        ];

        $this->assertEquals($this->transposeForeach($case1),$result1);
        $this->assertEquals($this->transposeForeach($case2),$result2);
        $this->assertEquals($this->transposeForeach($case3),$result3);
    }
}

// 1, 2 || 0.0 0.1
// 3, 4 || 1.0 1.1

// 1, 3 || 0.0  
// 2, 4 || 0.1


// 1, 2, 3 || 0.0 0.1 0.2
// 4, 5, 6 || 1.0 1.1 1.2
// 7, 8, 9 || 2.0 2.1 2.2

// 3, 6, 9
// 2, 5, 8
// 1, 4, 