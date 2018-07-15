<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 1:29 AM
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

$cartPack = new \GOF\Behavioural\Iterator\CartPack();
$cartPack->addCart(new \GOF\Behavioural\Iterator\Cart('Vasia', ['apple', 'pineapple', 'orange']));
$cartPack->addCart(new \GOF\Behavioural\Iterator\Cart('Sasha', ['toy', 'flower', 'ball']));
$cartPack->addCart(new \GOF\Behavioural\Iterator\Cart('Dima', ['anime', 'figure', 'manga']));


$packIterator = new \GOF\Behavioural\Iterator\CartIterator($cartPack);
$packIterator->reset();

while (!$packIterator->isDone()) {
    print $packIterator->current()->getOwner() . PHP_EOL;
    $packIterator->next();
}
print $packIterator->current()->getOwner() . PHP_EOL;

