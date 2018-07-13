<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 9:15 PM
 */

namespace GOF\Behavioural\Interpreter;


/**
 * Class ExpressionBase represents an evaluation of terminal or non-terminal expressions
 * for Polish notation mathematical approach.
 *
 * @package GOF\Behavioural\Interpreter
 */
abstract class ExpressionBase
{
    /**
     * Evaluates an expression.
     * @return int Calculated integer.
     */
    abstract public function evaluate(): int;
}