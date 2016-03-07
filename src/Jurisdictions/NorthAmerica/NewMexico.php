<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\NorthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\NorthAmerica\NewMexicoValueAddedTax;
use Money\Currency;

/**
 * Class NewMexico.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class NewMexico implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewMexicoValueAddedTax
     */
    private $tax;

    /**
     * NewMexico constructor.
     */
    public function __construct()
    {
        $this->tax = new NewMexicoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewMexicoValueAddedTax
     */
    public function rate()
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency()
    {
        return $this->currency;
    }
}
