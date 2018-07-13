<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 11:08 PM
 */

namespace GOF\Behavioural\Interpreter;


use function array_shift;
use function explode;
use function intval;
use function is_int;
use function is_numeric;
use TypeError;
use function var_dump;

class Parser
{
    public function parse(string $polishExpression): ExpressionBase
    {
        $symbols = explode(' ', $polishExpression);

        return $this->parseNextExpression($symbols);
    }

    private function parseNextExpression(array &$symbols): ExpressionBase
    {
        if (is_numeric($symbols[0])) {
            $val = array_shift($symbols);

            return new IntExpression((int) $val);
        }

        return $this->parseNonTerminalExpression($symbols);
    }

    private function parseNonTerminalExpression(array &$symbols): ExpressionBase
    {
        $strSymbol = array_shift($symbols);

        $expr1 = $this->parseNextExpression($symbols);
        $expr2 = $this->parseNextExpression($symbols);

        switch ($strSymbol) {
        case '+':
            {
                return new AdditionExpression($expr1, $expr2);
            }
        case '-':
            {
                return new SubstractionExpression($expr1, $expr2);
            }
        default:
            {
                throw new TypeError('Invalid symbol : '.$strSymbol);
            }
        }
    }
}