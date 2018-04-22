<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 22-Apr-18
 * Time: 4:38 PM
 */

require_once '../../../' . 'vendor/autoload.php';


$customer = new \GOF\Structural\Facade\Customer();

$customer->setNeeded('OAK');
$orderExecutor = new \GOF\Structural\Facade\OrderExecutorAsFacade($customer->getNeeded());
$customer->receiveOrder($orderExecutor->deliver());
print $customer();

echo PHP_EOL;

$customer->setNeeded('PEAR');
$orderExecutor->takeOrder($customer->getNeeded());
$customer->receiveOrder($orderExecutor->deliver());
print $customer();