<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Marwan\CodewarPhp\LikeFeatures;
use Marwan\CodewarPhp\ConsecutiveFibbonaci;

class ConsecutiveFibbonaciTest extends TestCase {

    public ConsecutiveFibbonaci $consecutiveFibbonaci;

    public function setUp(): void {
        $this->consecutiveFibbonaci= new ConsecutiveFibbonaci();
    }

    private function revTest($actual, $expected) {
        $this->assertSame($expected, $actual);
    }
    
    public function testBasics() {        
      $this->revTest($this->consecutiveFibbonaci->explaind(4895), [55, 89, true]);
      $this->revTest($this->consecutiveFibbonaci->explaind(5895), [89, 144, false]);
      $this->revTest($this->consecutiveFibbonaci->explaind(74049690), [6765, 10946, true]);
    }

    public function testRefactor() {        
        $this->revTest($this->consecutiveFibbonaci->refactor(4895), [55, 89, true]);
        $this->revTest($this->consecutiveFibbonaci->refactor(5895), [89, 144, false]);
        $this->revTest($this->consecutiveFibbonaci->refactor(74049690), [6765, 10946, true]);
      }
}