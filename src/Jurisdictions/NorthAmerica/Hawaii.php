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
use DraperStudio\Basket\TaxRates\NorthAmerica\HawaiiValueAddedTax;
use Money\Currency;

/**
 * Class Hawaii.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Hawaii implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var HawaiiValueAddedTax
     */
    private $tax;

    /**
     * Hawaii constructor.
     */
    public function __construct()
    {
        $this->tax = new HawaiiValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return HawaiiValueAddedTax
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
