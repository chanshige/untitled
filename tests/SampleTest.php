<?php

namespace Chanshige\Untitled;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    protected function testNow()
    {
        $dateTIme = new DateTimeImmutable();
        $date = new SampleTest($dateTIme);
        $this->assertEquals((string)$date, $dateTIme->format('Y-m-d H:i:s'));
    }
}
