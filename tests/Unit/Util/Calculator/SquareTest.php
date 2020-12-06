<?php

declare(strict_types=1);

namespace App\Test\Unit\Util\Calculator;

use App\Util\Calculator\Square;
use PHPUnit\Framework\TestCase;
use Exception;

class SquareTest extends TestCase
{
    /**
     * @test
     */
    public function calcGood(): void
    {
        $square = new Square(9.4);
        self::assertEquals(9.4 * 9.4, $square->calc());
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
