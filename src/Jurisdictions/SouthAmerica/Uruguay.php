<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\Jurisdictions\SouthAmerica;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\SouthAmerica\UruguayValueAddedTax;
use Money\Currency;

/**
 * Class Uruguay.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Uruguay implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UruguayValueAddedTax
     */
    private $tax;

    /**
     * Uruguay constructor.
     */
    public function __construct()
    {
        $this->tax = new UruguayValueAddedTax();
        $this->currency = new Currency('UYU');
    }

    /**
     * @return UruguayValueAddedTax
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
