<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 4:28 PM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class UsSpinnerFactory
 *
 * @package GOF\Creational\AbstractFactory
 */
class UsSpinnerFactory extends AbstractSpinnerFactory
{
	/**
	 * @var string
	 */
    private $context = 'Us';

	/**
	 * Prints the context of execution.
	 */
    function printContext()
    {
        print 'context: ' . $this->context . ' // ';
    }

	/**
	 * @return UsCircleSpinner|mixed
	 */
    function makeCircleSpinner()
    {
        return new UsCircleSpinner();
    }

	/**
	 * @return UsSquareSpinner|mixed
	 */
    function makeSquareSpinner()
    {
        return new UsSquareSpinner();
    }
}