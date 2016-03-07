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
use DraperStudio\Basket\TaxRates\NorthAmerica\ConnecticutValueAddedTax;
use Money\Currency;

/**
 * Class Connecticut.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Connecticut implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ConnecticutValueAddedTax
     */
    private $tax;

    /**
     * Connecticut constructor.
     */
    public function __construct()
    {
        $this->tax = new ConnecticutValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ConnecticutValueAddedTax
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
