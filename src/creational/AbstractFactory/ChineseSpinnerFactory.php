<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 24-Jan-18
 * Time: 1:14 AM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class ChineseSpinnerFactory
 *
 * @package GOF\Creational\AbstractFactory
 */
class ChineseSpinnerFactory extends AbstractSpinnerFactory
{
	private $context = 'Chinese';

	/**
	 * Prints context of instance.
	 */
	function printContext()
	{
		print 'context: ' . $this->context . ' // ';
	}

	/**
	 * @return ChineseCircleSpinner
	 */
	function makeCircleSpinner()
	{
		return new ChineseCircleSpinner();
	}

	/**
	 * @return ChineseSquareSpinner
	 */
	function makeSquareSpinner()
	{
		return new ChineseSquareSpinner();
	}
}