<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 12:35 PM
 */

namespace GOF\Behavioural\Mediator;


use function count;
use Exception;
use ReflectionClass;
use function strcmp;

class TheMediator implements MediatorInterface
{
    private $party1;
    private $party2;
    private $party3;

    public function setParties(PartyInterface ...$parties)
    {
        $reflection = new ReflectionClass(TheMediator::class);
        $props = $reflection->getProperties();

        if (count($parties) < count($props)) {
            throw new Exception('Not a minimum enough parties provided to have a conersation.');
        }

        for($i = 1; $i <= count($parties); $i++) {
            $partyObj = 'party' . $i;
            $this->$partyObj = $parties[$i-1];
        }
    }

    public function transferMessage(PartyInterface $party, string $message): void
    {
        $reflection = new ReflectionClass(TheMediator::class);
        $props = $reflection->getProperties();

        for($i = 1; $i <= count($props); $i++) {
            $partyObj = 'party' . $i;

            if ($this->$partyObj === $party) {
                continue;
            }

            $this->$partyObj->receive($message);
        }
    }
}