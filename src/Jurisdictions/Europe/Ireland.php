<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\IrelandValueAddedTax;
use Money\Currency;

class Ireland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IrelandValueAddedTax
     */
    private $tax;

    /**
     * Ireland constructor.
     */
    public function __construct()
    {
        $this->tax = new IrelandValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return IrelandValueAddedTax
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
