<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\Europe;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\Europe\BelarusValueAddedTax;
use Money\Currency;

/**
 * Class Belarus.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Belarus implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BelarusValueAddedTax
     */
    private $tax;

    /**
     * Belarus constructor.
     */
    public function __construct()
    {
        $this->tax = new BelarusValueAddedTax();
        $this->currency = new Currency('BYR');
    }

    /**
     * @return BelarusValueAddedTax
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
