<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\EstoniaValueAddedTax;
use Money\Currency;

class Estonia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EstoniaValueAddedTax
     */
    private $tax;

    /**
     * Estonia constructor.
     */
    public function __construct()
    {
        $this->tax = new EstoniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return EstoniaValueAddedTax
     */
    public function rate() : TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency() : Currency
    {
        return $this->currency;
    }
}
