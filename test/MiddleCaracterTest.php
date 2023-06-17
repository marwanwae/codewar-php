<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Marwan\CodewarPhp\MiddleCaracter;

class MiddleCaracterTest extends TestCase {

    public MiddleCaracter $middleCaracter;

    public function setUp(): void {
        $this->middleCaracter = new MiddleCaracter();
    }

    public function testgetMiddle() {
        $this->assertSame("es", $this->middleCaracter->getMiddle("test"));
        $this->assertSame("t", $this->middleCaracter->getMiddle("testing"));
        $this->assertSame("dd", $this->middleCaracter->getMiddle("middle"));
        $this->assertSame("A", $this->middleCaracter->getMiddle("A"));
    }
}