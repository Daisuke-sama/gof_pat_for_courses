<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Jun-18
 * Time: 1:30 AM
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

$love = new \GOF\Behavioural\ResponsibilityChain\Love();
$anger = new \GOF\Behavioural\ResponsibilityChain\Anger();
$anger->chainWith($love);
$happiness = new \GOF\Behavioural\ResponsibilityChain\Happiness();
$happiness->chainWith($anger);
$sadness = new \GOF\Behavioural\ResponsibilityChain\Sadness();
$sadness->chainWith($happiness);
$joy = new \GOF\Behavioural\ResponsibilityChain\Joy();
$joy->chainWith($sadness);
$love->chainWith($joy);

print $love->activate('Sadness') . PHP_EOL;
print $sadness->activate('Joy') . PHP_EOL;
