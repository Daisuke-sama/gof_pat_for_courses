<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 24-Jan-18
 * Time: 1:09 AM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class AbstractSpinnerFactory
 *
 * @package GOF\Creational\AbstractFactory
 */
abstract class AbstractSpinnerFactory
{
	/**
	 * @return mixed
	 */
    abstract function makeCircleSpinner();

	/**
	 * @return mixed
	 */
    abstract function makeSquareSpinner();
}