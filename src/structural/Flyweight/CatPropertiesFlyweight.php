<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 13-May-18
 * Time: 6:46 PM
 */

namespace GOF\Structural\Flyweight;


/**
 * Class CatPropertiesFlyweight represents parameters of a cat.
 *
 * @package GOF\Structural\Flyweight
 */
class CatPropertiesFlyweight
{
	/**
	 * @var string
	 */
	private $color;

	/**
	 * @var int
	 */
	private $weight;


	public function __construct(string $color = 'white', int $weight = 5)
	{
		$this->setWeight($weight);
		$this->setColor($color);
	}

	/**
	 * @return string
	 */
	public function getColor(): string
	{
		return $this->color;
	}

	/**
	 * @param string $color
	 */
	public function setColor(string $color)
	{
		$this->color = $color;
	}

	/**
	 * @return int
	 */
	public function getWeight(): int
	{
		return $this->weight;
	}

	/**
	 * @param int $weight
	 */
	public function setWeight(int $weight)
	{
		$this->weight = $weight;
	}
}
