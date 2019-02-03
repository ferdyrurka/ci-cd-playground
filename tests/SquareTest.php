<?php
declare(strict_types=1);

use App\Square;
use PHPUnit\Framework\TestCase;

/**
 * Class SquareTest
 */
class SquareTest extends TestCase
{
    /**
     * @test
     */
    public function calcGood(): void
    {
        $square = new Square(9.4);
        $this->assertEquals(9.4^2, $square->calc());
    }

    /**
     * @test
     */
    public function exceptionMinusArgs(): void
    {
        $square = new Square(-9.4);

        $this->expectException(Exception::class);
        $square->calc();
    }
}

