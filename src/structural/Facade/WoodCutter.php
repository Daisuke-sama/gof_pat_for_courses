<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 22-Apr-18
 * Time: 4:34 PM
 */

namespace GOF\Structural\Facade;


/**
 * Class WoodCutter represents a person who cuts an ordered tree of specified type.
 *
 * @package GOF\Structural\Facade
 */
class WoodCutter
{
	/**
	 * @param string $lumberType
	 *
	 * @return string
	 */
	public function cut(string $lumberType)
	{
		return !empty($lumberType) ? 'I cut you the source.' : '';
	}
}