<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Marwan\CodewarPhp\MovingZeros;
use Marwan\CodewarPhp\LikeFeatures;

class MovingZerosTest extends TestCase {

    public MovingZeros $movingZeros;

    public function setUp(): void {
        $this->movingZeros = new MovingZeros();
    }

    public function testMove() {
        $this->assertSame([1,2,1,1,3,1,0,0,0,0], $this->movingZeros->move([1,2,0,1,0,1,0,3,0,1]));
        $this->assertSame([9,9,1,2,1,1,3,1,9,9,0,0,0,0,0,0,0,0,0,0], $this->movingZeros->move([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]));
        $this->assertSame(["a","b","c","d",1,1,3,1,9,9,0,0,0,0,0,0,0,0,0,0], $this->movingZeros->move(["a",0,0,"b","c","d",0,1,0,1,0,3,0,1,9,0,0,0,0,9]));
        $this->assertSame(["a","b",null,"c","d",1,false,1,3,[],1,9,9,0,0,0,0,0,0,0,0,0,0], $this->movingZeros->move(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]));
        $this->assertSame([1,null,2,false,1,0,0], $this->movingZeros->move([0,1,null,2,false,1,0]));
        $this->assertSame(["a","b"], $this->movingZeros->move(["a","b"]));
        $this->assertSame(["a"], $this->movingZeros->move(["a"]));
        $this->assertSame([0,0], $this->movingZeros->move([0,0]));
        $this->assertSame([0], $this->movingZeros->move([0]));
        $this->assertSame([false], $this->movingZeros->move([false]));
        $this->assertSame([], $this->movingZeros->move([]));
    }
}