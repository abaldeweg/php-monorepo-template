<?php

namespace Baldeweg\Bundle\Tests\Calculate;

use PHPUnit\Framework\TestCase;
use Baldeweg\Bundle\Calculate\Calculate;

class CalculateTest extends TestCase
{
    public function testSum()
    {
        $calculate = new Calculate();
        $result = $calculate->sum(1, 2);

        $this->assertEquals(3, $result);
    }
}
