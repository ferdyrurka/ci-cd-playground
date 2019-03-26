<?php
declare(strict_types=1);

namespace App\Test;

use App\Calculator\Square;
use PHPUnit\Framework\TestCase;
use \Exception;

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
        $this->assertEquals(9.4 * 9.4, $square->calc());
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

