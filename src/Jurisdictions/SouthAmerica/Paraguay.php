<?php


declare(strict_types=1);



namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\SouthAmerica\ParaguayValueAddedTax;
use Money\Currency;

class Paraguay implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ParaguayValueAddedTax
     */
    private $tax;

    /**
     * Paraguay constructor.
     */
    public function __construct()
    {
        $this->tax = new ParaguayValueAddedTax();
        $this->currency = new Currency('PYG');
    }

    /**
     * @return ParaguayValueAddedTax
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
