<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 30-Mar-18
 * Time: 1:52 PM
 */

namespace GOF\Structural\Decorator;
use function str_replace;


/**
 * Class BlastedBullets
 *
 * @package GOF\Structural\Decorator
 */
class BlastedBullets extends AGunBulletDecorator
{
	/**
	 * BlastedBullets constructor.
	 *
	 * @param AGun $gunForDecor
	 */
	public function __construct(AGun $gunForDecor)
	{
		parent::__construct($gunForDecor);

		echo "===Now it becomes a blaster!";
	}

	/**
	 * @return string
	 */
	public function fire()
	{
		return "Blasted shooot===>" . str_replace(' ', parent::fire(), '+++');
	}

	/**
	 * @return string
	 */
	public function load()
	{
		return 'Filling the loader with blasted bullets! ' . parent::load();
	}
}