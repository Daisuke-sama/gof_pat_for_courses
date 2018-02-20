<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Feb-18
 * Time: 11:28 PM
 */

namespace GOF\Structural\Composition;


/**
 * Class Solitary can only exist and can't have any subordinates.
 *
 * @package GOF\Structural\Composition
 */
class Solitary implements IUnit
{
	public function sayName(): void
	{
		print 'I am a solitary man, I haven\'t a name. ';
	}

	public function __call($name, $arguments)
	{
		print 'I can do nothing. ';
	}
}