<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 10:55 PM
 */

namespace GOF\Behavioural\Interpreter;


use function sprintf;

class SubstractionExpression extends ExpressionBase
{
    /**
     * @var ExpressionBase
     */
    private $expr1;

    /**
     * @var ExpressionBase
     */
    private $expr2;

    public function __construct(ExpressionBase $expr1, ExpressionBase $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }

    /**
     * Evaluates an expression.
     *
     * @return int Calculated integer.
     */
    public function evaluate(): int
    {
        return $this->expr1->evaluate() - $this->expr2->evaluate();
    }

    public function __toString()
    {
        return sprintf("(%s - %s)", $this->expr1, $this->expr2);
    }
}