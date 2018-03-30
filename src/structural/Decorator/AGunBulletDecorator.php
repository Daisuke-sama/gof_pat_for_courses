<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 30-Mar-18
 * Time: 1:42 PM
 */

namespace GOF\Structural\Decorator;


/**
 * Class AGunBulletDecorator
 *
 * @package GOF\Structural\Decorator
 */
abstract class AGunBulletDecorator extends AGun
{
	/**
	 * @var AGun
	 */
	protected $gun;

	/**
	 * AGunBulletDecorator constructor.
	 *
	 * @param AGun $gunForDecor
	 */
	public function __construct(AGun $gunForDecor)
	{
		$this->gun = $gunForDecor;
	}

	public function load()
	{
		return $this->gun->load();
	}

	public function fire()
	{
		return $this->gun->fire();
	}
}