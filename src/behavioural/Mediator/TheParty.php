<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 1:14 PM
 */

namespace GOF\Behavioural\Mediator;


class TheParty implements PartyInterface
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $receivedMessage = '';

    /**
     * @var MediatorInterface
     */
    private $mediator;

    /**
     * TheParty constructor.
     *
     * @param string            $name
     * @param MediatorInterface $mediator
     */
    public function __construct(string $name, MediatorInterface $mediator)
    {
        $this->setName($name);
        $this->mediator = $mediator;
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
    public function getReceivedMessage(): string
    {
        return $this->receivedMessage;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $message
     */
    public function send(string $message): void
    {
        $this->mediator->transferMessage($this, $message);
    }

    /**
     * @param string $message
     */
    public function receive(string $message): void
    {
        $this->receivedMessage = $message;
    }
}