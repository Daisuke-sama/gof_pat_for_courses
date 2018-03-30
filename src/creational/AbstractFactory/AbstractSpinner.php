<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 4:31 PM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class AbstractSpinner
 *
 * @package GOF\Creational\AbstractFactory
 */
abstract class AbstractSpinner
{
	/**
	 * @return string
	 */
    abstract function getModel();

	/**
	 * @return string
	 */
    abstract function getInventor();
}