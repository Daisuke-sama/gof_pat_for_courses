<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 13-May-18
 * Time: 7:02 PM
 */

namespace GOF\Structural\Flyweight;

use function count;
use Exception;
use function rand;
use function random_int;
use function strcmp;


/**
 * Class CatFactory produced cats.
 *
 * @package GOF\Structural\Flyweight
 */
class CatFactory
{
	/**
	 * @var array
	 */
	private $catPropsCollection = [];

	/**
	 * Creates a number of cats with a autogenerated data.
	 *
	 * @param int $number A desired number of cats.
	 *
	 * @return array Array of Cats, or an empty array.
	 * @throws \Exception
	 */
	public function makeFlyweightCats(int $number): array
	{
		$cats = [];
		for ($i = 0; $i < $number; $i++) {
			$cats[] = $this->makeASingleCat("cat" . $number, null);
		}

		return $cats;
	}

	/**
	 * Creates a cat with specific parameters and uses shared properties library if needed.
	 *
	 * @param string                      $name
	 * @param CatPropertiesFlyweight|null $props
	 *
	 * @return Cat
	 * @throws \Exception
	 */
	public function makeASingleCat(string $name, $props): Cat
	{
		if (null === $props) {
			$props = new CatPropertiesFlyweight();
			$props->setColor('green');
			$props->setWeight(random_int(1, 10));
		}

		$existedPropKey = -1;
		$propsExist = count($this->getCatPropsCollection());
		for ($i = 0; $i < $propsExist; $i++) {
			if (strcmp($props->getColor(), $this->catPropsCollection[$i]->getColor()) === 0
				&& $props->getWeight() === $this->catPropsCollection[$i]->getWeight()
			) {
				$existedPropKey = $i;
				break;
			}
		}

		if ($existedPropKey === -1) {
			$this->catPropsCollection[] = $props;
			$existedPropKey = count($this->catPropsCollection) - 1;
		}

		return new Cat($name, $this->catPropsCollection[$existedPropKey]);
	}

	/**
	 * @return array
	 */
	public function getCatPropsCollection(): array
	{
		return $this->catPropsCollection;
	}

	/**
	 * Creates cats without checking for existence of their properties, i.e. without using the Flyweight pattern.
	 *
	 * @param int $number A number of cats to be produced.
	 *
	 * @return array Cats without the flyweight pattern usage.
	 */
	public function makeBasicCats(int $number): array
	{
		$cats = [];
		for ($i = 0; $i < $number; $i++) {
			try {
				$cats[] = new Cat('cat' . random_int(1, 5), new CatPropertiesFlyweight());
			} catch (Exception $e) {
			}
		}

		return $cats;
	}
}
