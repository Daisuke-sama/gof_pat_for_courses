<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 22-Apr-18
 * Time: 4:17 PM
 */

namespace GOF\Structural\Facade;


/**
 * Class LumbersFactory is a complex subsystem for producing lumbers from prepared source.
 *
 * @package GOF\Structural\Facade
 */
class LumbersFactory
{
	/**
	 * @param string $beams
	 *
	 * @return string
	 */
	public function makeLumbers(string $beams)
	{
		return !empty($beams) ? 'We made you lumbers.' : '';
	}
}