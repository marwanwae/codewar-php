<?php

namespace Test;

use Marwan\CodewarPhp\ReverseWord;
use PHPUnit\Framework\TestCase;

class ReverseWordTest extends TestCase {
    public ReverseWord $reverseWord;

    public function setUp(): void {
        $this->reverseWord = new ReverseWord();
    }

    public function testReverseWord() {
        $this->assertSame('ehT kciuq nworb xof spmuj revo eht yzal .god', $this->reverseWord->reverse('The quick brown fox jumps over the lazy dog.'));
        $this->assertSame('elppa', $this->reverseWord->reverse('apple'));
        $this->assertSame('a b c d', $this->reverseWord->reverse('a b c d'));
        $this->assertSame('elbuod  decaps  sdrow', $this->reverseWord->reverse('double  spaced  words'));
        $this->assertSame('desserts stressed', $this->reverseWord->reverse('stressed desserts'));
        $this->assertSame('olleh olleh', $this->reverseWord->reverse('hello hello'));
    }

    public function testReverseWordImplode() {
        $this->assertSame('ehT kciuq nworb xof spmuj revo eht yzal .god', $this->reverseWord->reverseImplode('The quick brown fox jumps over the lazy dog.'));
        $this->assertSame('elppa', $this->reverseWord->reverseImplode('apple'));
        $this->assertSame('a b c d', $this->reverseWord->reverseImplode('a b c d'));
        $this->assertSame('elbuod  decaps  sdrow', $this->reverseWord->reverseImplode('double  spaced  words'));
        $this->assertSame('desserts stressed', $this->reverseWord->reverseImplode('stressed desserts'));
        $this->assertSame('olleh olleh', $this->reverseWord->reverseImplode('hello hello'));
    }
}