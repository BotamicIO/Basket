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
use DraperStudio\Basket\TaxRates\NorthAmerica\ArkansasValueAddedTax;
use Money\Currency;

/**
 * Class Arkansas.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Arkansas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ArkansasValueAddedTax
     */
    private $tax;

    /**
     * Arkansas constructor.
     */
    public function __construct()
    {
        $this->tax = new ArkansasValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ArkansasValueAddedTax
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
