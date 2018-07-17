<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 17-Jul-18
 * Time: 10:11 PM
 */

namespace GOF\Behavioural\Memento;


/**
 * Class MementoBoy
 *
 * @package GOF\Behavioural\Memento
 */
class MementoBoy
{
    /**
     * @var BoySaveItem
     */
    private $boyState;

    /**
     * MementoBoy constructor.
     *
     * @param string $name
     * @param int    $age
     * @param string $secret
     */
    public function __construct(string $name, int $age, string $secret = '')
    {
        $this->boyState = new BoySaveItem();
        $this->boyState->Name = $name;
        $this->boyState->Age = $age;
        $this->boyState->Secret = $secret;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->boyState->Name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->boyState->Age;
    }

    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->boyState->Secret;
    }
}
