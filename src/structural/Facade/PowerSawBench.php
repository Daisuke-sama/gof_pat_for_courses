<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 22-Apr-18
 * Time: 4:13 PM
 */

namespace GOF\Structural\Facade;


/**
 * Class PowerSawBench represents a complex subsystem of cutting source trees and preparing them for lumbering.
 *
 * @package GOF\Structural\Facade
 */
class PowerSawBench
{
	/**
	 * @param string $source
	 *
	 * @return string
	 */
	public function makeCleanBeams(string $source)
	{
		return !empty($source) ? 'We made you beams.' : '';
	}
}