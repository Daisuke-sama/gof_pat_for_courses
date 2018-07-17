<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 17-Jul-18
 * Time: 10:06 PM
 */

namespace GOF\Behavioural\Memento;


/**
 * Class SecretBoy
 *
 * @package GOF\Behavioural\Memento
 */
class SecretBoy extends ABoy
{
    /**
     * @return MementoBoy
     */
    public function createMemento(): MementoBoy
    {
        return new MementoBoy($this->getName(), $this->getAge());
    }
}