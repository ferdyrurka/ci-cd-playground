<?php

declare(strict_types=1);

namespace App\Util\Calculator;

use Exception;

class Square implements CalculatorInterface
{
    private float $a;

    public function __construct(float $a)
    {
        $this->a = $a;
    }

    public function calc(): float
    {
        if ($this->a < 0) {
            throw new Exception('Arguments a must be greater than 0');
        }

        return $this->a * $this->a;
    }
}
