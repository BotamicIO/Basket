<?php

/*
 * This file is part of Basket.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Basket\MetaData;

use DraperStudio\Basket\Basket;
use DraperStudio\Basket\Contracts\MetaData;
use DraperStudio\Basket\Contracts\Reconciler;
use Money\Currency;
use Money\Money;

/**
 * Class TotalMetaData.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class TotalMetaData implements MetaData
{
    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * TotalMetaData constructor.
     *
     * @param Reconciler $reconciler
     */
    public function __construct(Reconciler $reconciler)
    {
        $this->reconciler = $reconciler;
    }

    /**
     * @param Basket $basket
     *
     * @return Money
     */
    public function generate(Basket $basket)
    {
        $total = new Money(0, $basket->currency());

        foreach ($basket->products() as $product) {
            $total = $total->add($this->reconciler->total($product));
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'total';
    }
}
