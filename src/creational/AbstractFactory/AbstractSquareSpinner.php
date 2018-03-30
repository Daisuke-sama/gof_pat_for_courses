<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 4:36 PM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class AbstractSquareSpinner
 *
 * @package GOF\Creational\AbstractFactory
 */
abstract class AbstractSquareSpinner extends AbstractSpinner
{
	/**
	 * @var string
	 */
    private $shape = 'Square';
}