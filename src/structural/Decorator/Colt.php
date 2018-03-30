<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 30-Mar-18
 * Time: 1:39 PM
 */

namespace GOF\Structural\Decorator;


/**
 * Class Colt
 *
 * @package GOF\Structural\Decorator
 */
class Colt extends AGun
{
	/**
	 * Colt constructor.
	 */
	public function __construct()
	{
		echo "===Colt is got into hand.";
	}
}