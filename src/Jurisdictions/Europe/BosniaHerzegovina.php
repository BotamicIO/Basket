<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\BosniaHerzegovinaValueAddedTax;
use Money\Currency;

class BosniaHerzegovina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BosniaHerzegovinaValueAddedTax
     */
    private $tax;

    /**
     * BosniaHerzegovina constructor.
     */
    public function __construct()
    {
        $this->tax = new BosniaHerzegovinaValueAddedTax();
        $this->currency = new Currency('BAM');
    }

    /**
     * @return BosniaHerzegovinaValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
