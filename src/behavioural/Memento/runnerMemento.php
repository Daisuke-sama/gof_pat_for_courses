<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 17-Jul-18
 * Time: 9:54 PM
 */

require_once __DIR__.'/../../../vendor/autoload.php';

$boys = [
    new \GOF\Behavioural\Memento\NonSecretBoy('Steve', 15, 'I love games.'),
    new \GOF\Behavioural\Memento\NonSecretBoy('James', 100, 'Steve a good man.'),
    new \GOF\Behavioural\Memento\SecretBoy("George", 20, 'I have not girl.')
];

printBoysState();

print PHP_EOL . 'Saving boys...' . PHP_EOL;
$storage = [];
foreach ($boys as $boy) {
    $storage[] = $boy->createMemento();
}

print PHP_EOL . 'Changing boys...' . PHP_EOL;
$boys[0]->setName('Vasya');
$boys[0]->setSecret('Haha!');
$boys[1]->setAge('105');
$boys[2]->setName('Nadya');
$boys[2]->setSecret('I am a girl, actually.');
printBoysState();

print PHP_EOL . 'Reverting some boys state...' . PHP_EOL;
$boys[1]->restoreState($storage[1]);
$boys[2]->restoreState($storage[2]);
printBoysState();



function printBoysState()
{
    global $boys;

    print 'The current state of boys:' . PHP_EOL;
    foreach ($boys as $boy) {
        $secret = empty($boy->getSecret()) ? 'Hided his secret previously' : $boy->getSecret();
        print sprintf('+ %s - %s - %s', $boy->getName(), $boy->getAge(), $secret) . PHP_EOL;
    }
}