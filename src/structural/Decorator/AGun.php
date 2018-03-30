<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 30-Mar-18
 * Time: 1:37 PM
 */

namespace GOF\Structural\Decorator;


/**
 * Class AGun
 *
 * @package GOF\Structural\Decorator
 */
abstract class AGun
{
	/**
	 * @return string
	 */
	public function fire() {
		return "Bullet was shoot";
	}

	/**
	 * @return string
	 */
	public function load() {
		return "Load complete.";
	}
}