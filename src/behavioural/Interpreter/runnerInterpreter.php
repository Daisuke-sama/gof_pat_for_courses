<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 11:22 PM
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

$commands = [
    "+ 5 6",
    "- 6 5",
    "+ - 4 5 6",
    "+ 4 - 5 6",
    "+ - + - - 2 3 4 + - -5 6 + -7 8 9 10"
];
$parser = new \GOF\Behavioural\Interpreter\Parser();

foreach ($commands as $command) {
    $expression = $parser->parse($command);
    print $expression . ' = ' . $expression->evaluate() . PHP_EOL;
}