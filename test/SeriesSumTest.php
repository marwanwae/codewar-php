<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Marwan\CodewarPhp\SeriesSum;

class SeriesSumTest extends TestCase {

    public SeriesSum $seriesSUm;

    public function setUp(): void {
        $this->seriesSUm = new SeriesSum();
    }

    public function testSUmSeries() {
        $this->assertSame('1.00', $this->seriesSUm->seriesSum   (1));
        $this->assertSame('1.25', $this->seriesSUm->seriesSum(2));
        $this->assertSame('1.39', $this->seriesSUm->seriesSum(3));
        $this->assertSame('1.49', $this->seriesSUm->seriesSum(4));
    }
}