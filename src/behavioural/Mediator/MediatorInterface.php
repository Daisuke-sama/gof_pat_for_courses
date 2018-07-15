<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 11:42 AM
 */

namespace GOF\Behavioural\Mediator;


interface MediatorInterface
{
    public function transferMessage(PartyInterface $party, string $message): void;
}