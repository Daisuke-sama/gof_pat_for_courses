<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 17-Jul-18
 * Time: 9:54 PM
 */

namespace GOF\Behavioural\Memento;


/**
 * Class ABoy
 *
 * @package GOF\Behavioural\Memento
 */
abstract class ABoy
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $secret;

    /**
     * ABoy constructor.
     *
     * @param string $name
     * @param int $age
     * @param string $secret
     */
    public function __construct(string $name, int $age, string $secret)
    {
        $this->setAge($age);
        $this->setName($name);
        $this->setSecret($secret);
    }

    /**
     * @return MementoBoy
     */
    abstract public function createMemento(): MementoBoy;

    /**
     * Undo boy's statement.
     *
     * @param MementoBoy $state
     */
    public function restoreState(MementoBoy $state)
    {
        $this->setAge($state->getAge());
        $this->setSecret($state->getSecret());
        $this->setName($state->getName());
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     */
    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }
}