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
use DraperStudio\Basket\TaxRates\Europe\FranceValueAddedTax;
use Money\Currency;

/**
 * Class France.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class France implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FranceValueAddedTax
     */
    private $tax;

    /**
     * France constructor.
     */
    public function __construct()
    {
        $this->tax = new FranceValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return FranceValueAddedTax
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
