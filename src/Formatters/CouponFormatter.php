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

namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;

class CouponFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return array
     */
    public function format($value): array
    {
        $coupons = [];

        foreach ($value as $coupon) {
            $coupons[] = $coupon->identifier();
        }

        return $coupons;
    }
}
