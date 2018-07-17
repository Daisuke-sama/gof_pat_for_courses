<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 17-Jul-18
 * Time: 10:04 PM
 */

namespace GOF\Behavioural\Memento;

/**
 * Class NonSecretBoy
 *
 * @package GOF\Behavioural\Memento
 */
class NonSecretBoy extends ABoy
{
    /**
     * @return MementoBoy
     */
    public function createMemento(): MementoBoy
    {
        return new MementoBoy($this->getName(), $this->getAge(), $this->getSecret());
    }
}