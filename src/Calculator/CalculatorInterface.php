<?php
declare(strict_types=1);

namespace App\Calculator;

/**
 * Interface CalculatorInterface
 * @package App
 */
interface CalculatorInterface
{
    /**
     * @return float
     */
    public function calc(): float;
}
