<?php

namespace Test;

use Marwan\CodewarPhp\LikeFeatures;
use PHPUnit\Framework\TestCase;

class LikeTest extends TestCase {

    public LikeFeatures $likeFeatures;

    public function setUp(): void {
        $this->likeFeatures = new LikeFeatures();
    }

    public function testLikes() {
        $this->assertSame( 'no one likes this', $this->likeFeatures->likes( [] ) );
        $this->assertSame( 'Peter likes this', $this->likeFeatures->likes( [ 'Peter' ] ) );
        $this->assertSame( 'Jacob and Alex like this', $this->likeFeatures->likes( [ 'Jacob', 'Alex' ] ) );
        $this->assertSame( 'Max, John and Mark like this', $this->likeFeatures->likes( [ 'Max', 'John', 'Mark' ]) );
        $this->assertSame( 'Alex, Jacob and 2 others like this', $this->likeFeatures->likes( [ 'Alex', 'Jacob', 'Mark', 'Max' ] ) );
    }
}