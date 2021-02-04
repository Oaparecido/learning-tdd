<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function example(): void
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7];
        $sum = array_sum($numbers);

        assertEquals(28, $sum, "value not is correct");
    }
}