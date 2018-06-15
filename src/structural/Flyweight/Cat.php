<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 13-May-18
 * Time: 6:42 PM
 */

namespace GOF\Structural\Flyweight;

use function var_dump;

/**
 * Class Cat represents a pet with shared and unshared data.
 *
 * @package GOF\Structural\Flyweight
 */
class Cat
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var CatPropertiesFlyweight
	 */
	private $properties;


	/**
	 * Cat constructor.
	 *
	 * @param string                 $name
	 * @param CatPropertiesFlyweight $properties
	 */
	public function __construct(string $name, CatPropertiesFlyweight $properties)
	{
		$this->setName($name);
		$this->setProperties($properties);
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name)
	{
		$this->name = $name;
	}

	/**
	 * @return CatPropertiesFlyweight
	 */
	public function getProperties(): CatPropertiesFlyweight
	{
		return $this->properties;
	}

	/**
	 * @param CatPropertiesFlyweight $properties
	 */
	public function setProperties(CatPropertiesFlyweight $properties)
	{
		$this->properties = $properties;
	}

}
