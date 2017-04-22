<?php


declare(strict_types=1);



namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class RussiaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * RussiaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.18;
    }

    /**
     * @return float
     */
    public function float(): float
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}
