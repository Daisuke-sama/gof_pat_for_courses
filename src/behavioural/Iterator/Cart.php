<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 12:52 AM
 */

namespace GOF\Behavioural\Iterator;


class Cart
{
    /**
     * @var array
     */
    private $products = [];

    /**
     * @var string
     */
    private $owner = 'default';

    /**
     * Cart constructor.
     *
     * @param string $owner
     * @param array  $products
     */
    public function __construct(string $owner, array $products)
    {
        $this->owner = $owner;
        $this->products = $products;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
}