<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 9:18 PM
 */

namespace GOF\Behavioural\Interpreter;


use function sprintf;
use function strval;

class IntExpression extends ExpressionBase
{
    /**
     * @var int
     */
    private $int;

    public function __construct(int $value)
    {
        $this->int = $value;
    }

    /**
     * Evaluates an expression.
     *
     * @return int Calculated integer.
     */
    public function evaluate(): int
    {
        return $this->int;
    }

    public function __toString()
    {
        return strval($this->int);
    }
}