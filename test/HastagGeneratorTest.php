<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Marwan\CodewarPhp\LikeFeatures;
use Marwan\CodewarPhp\HastagGenerator;

class HastagGeneratorTest extends TestCase {

    public HastagGenerator $hastagGenerator;

    public function setUp(): void {
        $this->hastagGenerator = new HastagGenerator();
    }

    public function testGenerateHastag() {

        // $result = $this->hastagGenerator->generateHastag('Codewars      ');
        // var_dump($result);
        // die;

        $this->assertSame(false, $this->hastagGenerator->generateHastag(''), 'Expected an empty string to return false');
        $this->assertSame(false, $this->hastagGenerator->generateHastag(str_repeat(' ', 200)), "Still an empty string");
        $this->assertSame('#Codewars', $this->hastagGenerator->generateHastag('Codewars'), 'Should handle a single word and add a hashtag at the beginning.');
        $this->assertSame('#Codewars', $this->hastagGenerator->generateHastag('Codewars      '), 'Should handle trailing whitespace.');
        $this->assertSame('#CodewarsIsNice', $this->hastagGenerator->generateHastag('Codewars Is Nice'), 'Should remove spaces.');
        $this->assertSame('#CodewarsIsNice', $this->hastagGenerator->generateHastag('codewars is nice'), 'Should capitalize first letters of words.');
        $this->assertSame('#CodeWars', $this->hastagGenerator->generateHastag('Code' . str_repeat(' ', 140) . 'wars'));
        $this->assertSame(false, $this->hastagGenerator->generateHastag('Looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong Cat'), 'Should return false if the final word is longer than 140 chars.');
        $this->assertSame("#A" . str_repeat("a", 138), $this->hastagGenerator->generateHastag(str_repeat("a", 139)), "Should work");
        $this->assertSame(false, $this->hastagGenerator->generateHastag(str_repeat("a", 140)), "Too long");
    }
}