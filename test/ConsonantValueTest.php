<?php

namespace Test;

use Marwan\CodewarPhp\ConsonantValue;
use Marwan\CodewarPhp\LikeFeatures;
use PHPUnit\Framework\TestCase;

class ConsonantValueTest extends TestCase {

    public ConsonantValue $consonantValue;

    public function setUp(): void {
        $this->consonantValue = new ConsonantValue();
    }

    public function testMySolve() {
        $this->assertSame(26, $this->consonantValue->mySolve("zodiac"));
        $this->assertSame(80, $this->consonantValue->mySolve("chruschtschov"));
        $this->assertSame(38, $this->consonantValue->mySolve("khrushchev"));
        $this->assertSame(57, $this->consonantValue->mySolve("strength"));
        $this->assertSame(73, $this->consonantValue->mySolve("catchphrase"));
        $this->assertSame(103, $this->consonantValue->mySolve("twelfthstreet"));
        $this->assertSame(80, $this->consonantValue->mySolve("mischtschenkoana"));
    }

    public function testBestSolve() {
        $this->assertSame(26, $this->consonantValue->bestSolve("zodiac"));
        $this->assertSame(80, $this->consonantValue->bestSolve("chruschtschov"));
        $this->assertSame(38, $this->consonantValue->bestSolve("khrushchev"));
        $this->assertSame(57, $this->consonantValue->bestSolve("strength"));
        $this->assertSame(73, $this->consonantValue->bestSolve("catchphrase"));
        $this->assertSame(103, $this->consonantValue->bestSolve("twelfthstreet"));
        $this->assertSame(80, $this->consonantValue->bestSolve("mischtschenkoana"));
    }

    public function testRefactorSolve() {
        $this->assertSame(26, $this->consonantValue->refactorSolve("zodiac"));
        $this->assertSame(80, $this->consonantValue->refactorSolve("chruschtschov"));
        $this->assertSame(38, $this->consonantValue->refactorSolve("khrushchev"));
        $this->assertSame(57, $this->consonantValue->refactorSolve("strength"));
        $this->assertSame(73, $this->consonantValue->refactorSolve("catchphrase"));
        $this->assertSame(103, $this->consonantValue->refactorSolve("twelfthstreet"));
        $this->assertSame(80, $this->consonantValue->refactorSolve("mischtschenkoana"));
    }
}