<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 12:56 AM
 */

namespace GOF\Behavioural\Iterator;


use function array_push;
use ArrayAccess;
use IteratorAggregate;
use OutOfRangeException;
use Traversable;


/**
 * Class CartPack plays role of the aggregator in the pattern.
 *
 * @package GOF\Behavioural\Iterator
 */
class CartPack implements IteratorAggregate, ArrayAccess
{
    /**
     * @var array
     */
    private $carts = [];

    /**
     * Retrieve an external iterator
     *
     * @link  http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return CartIterator|Traversable
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new CartIterator($this);
    }

    public function addCart(Cart $cart)
    {
        array_push($this->carts, $cart);
    }

    public function getCount()
    {
        return count($this->carts);
    }

    /**
     * Whether a offset exists
     *
     * @link  http://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset <p>
     *                      An offset to check for.
     *                      </p>
     *
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
        if (isset($this->carts[$offset])) {
            return true;
        }

        return false;
    }

    /**
     * Offset to retrieve
     *
     * @link  http://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     *                      The offset to retrieve.
     *                      </p>
     *
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        if ($this->offsetExists($offset)) {
            return $this->carts[$offset];
        }

        throw new OutOfRangeException();
    }

    /**
     * Offset to set
     *
     * @link  http://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset <p>
     *                      The offset to assign the value to.
     *                      </p>
     * @param mixed $value  <p>
     *                      The value to set.
     *                      </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
        $this->carts[$offset] = $value;
    }

    /**
     * Offset to unset
     *
     * @link  http://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset <p>
     *                      The offset to unset.
     *                      </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
        $this->carts[$offset] = null;
    }
}