<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 12:41 PM
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

$mediator = new \GOF\Behavioural\Mediator\TheMediator();

$party1 = new \GOF\Behavioural\Mediator\TheParty('George1', $mediator);
$party2 = new \GOF\Behavioural\Mediator\TheParty('George2', $mediator);
$party3 = new \GOF\Behavioural\Mediator\TheParty('George3', $mediator);

$mediator->setParties($party1, $party2, $party3);

$party1->send("Hi I am {$party1->getName()}");

print_r('Party1->received message -> ' . $party1->getReceivedMessage() . PHP_EOL);
print_r('Party2->received message -> ' . $party2->getReceivedMessage() . PHP_EOL);
print_r('Party3->received message -> ' . $party3->getReceivedMessage() . PHP_EOL);

