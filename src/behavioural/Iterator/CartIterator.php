<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 12:52 AM
 */

namespace GOF\Behavioural\Iterator;


use IteratorIterator;
use function serialize;

class CartIterator extends IteratorIterator implements NewIteratorInterface
{
    /**
     * @var CartPack
     */
    private $aggregator;

    /**
     * @var int
     */
    private $position;

    /**
     * CartIterator constructor.
     *
     * @param CartPack $pack
     */
    public function __construct(CartPack $pack)
    {
        $this->aggregator = $pack;
        $this->position = 0;
    }


    public function first()
    {
        $this->position = 0;

        return $this->current();
    }

    public function next()
    {
        if (!$this->isDone()) {
            $this->position++;
            return $this->current();
        }
        return false;
    }

    public function isDone()
    {
        if (($this->position + 1) >= $this->aggregator->getCount()) {
            return true;
        }

        return false;
    }

    public function current()
    {
        return $this->aggregator[$this->position];
    }

    public function reset()
    {
        $this->position = 0;
    }
}