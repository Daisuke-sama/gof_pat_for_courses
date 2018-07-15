<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 11:43 AM
 */

namespace GOF\Behavioural\Mediator;


interface PartyInterface
{
    public function send(string $message): void;
    public function receive(string $message): void;
}