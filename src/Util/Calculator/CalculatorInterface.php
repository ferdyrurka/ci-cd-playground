<?php

declare(strict_types=1);

namespace App\Util\Calculator;

interface CalculatorInterface
{
    /**
     * @return float
     */
    public function calc(): float;
}
