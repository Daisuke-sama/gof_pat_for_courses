<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 24-Jan-18
 * Time: 1:22 AM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class AbstractCircleSpinner
 *
 * @package GOF\Creational\AbstractFactory
 */
abstract class AbstractCircleSpinner extends AbstractSpinner
{
	/**
	 * @var string
	 */
	private $shape = 'circle';
}