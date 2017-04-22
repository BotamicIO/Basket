<?php


declare(strict_types=1);



namespace BrianFaust\Basket;

use BrianFaust\Basket\Contracts\Discount;
use BrianFaust\Basket\Contracts\Jurisdiction;
use Closure;
use Money\Currency;
use Money\Money;

class Basket
{
    /**
     * @var
     */
    private $rate;

    /**
     * @var
     */
    private $currency;

    /**
     * @var Collection
     */
    private $products;

    /**
     * @var
     */
    private $discount;

    /**
     * @var
     */
    private $delivery;

    /**
     * Basket constructor.
     *
     * @param Jurisdiction $jurisdiction
     */
    public function __construct(Jurisdiction $jurisdiction)
    {
        $this->rate = $jurisdiction->rate();
        $this->currency = $jurisdiction->currency();
        $this->products = new Collection();
    }

    /**
     * @return mixed
     */
    public function rate()
    {
        return $this->rate;
    }

    /**
     * @return mixed
     */
    public function currency() : Currency
    {
        return $this->currency;
    }

    /**
     * @return Collection
     */
    public function products()
    {
        return $this->products;
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->products->count();
    }

    /**
     * @param $sku
     *
     * @return mixed
     */
    public function pick($sku)
    {
        return $this->products->get($sku);
    }

    /**
     * @param Product $product
     */
    public function add(Product $product)
    {
        $this->products->add($product->sku, $product);
    }

    /**
     * @param $sku
     * @param Closure $action
     */
    public function update($sku, Closure $action)
    {
        $product = $this->pick($sku);

        $product->action($action);
    }

    /**
     * @param $sku
     */
    public function remove($sku)
    {
        $product = $this->pick($sku);

        $this->products->remove($sku);
    }

    /**
     * @param Discount $discount
     */
    public function discount(Discount $discount)
    {
        $this->discount = $discount;
    }

    /**
     * @param Money $delivery
     */
    public function delivery(Money $delivery)
    {
        $this->delivery = $delivery;
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        }
    }
}
