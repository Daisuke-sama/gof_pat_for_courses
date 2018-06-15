<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 13-May-18
 * Time: 7:21 PM
 */

namespace GOF\Structural\Flyweight;

use function array_merge;
use function array_push;
use function array_slice;
use const PHP_EOL;
use function print_r;
use function random_int;
use function var_dump;

/**
 * Class OrphanedCatsShelter stores collection of cats and takes them from streets.
 *
 * @package GOF\Structural\Flyweight
 */
class OrphanedCatsShelter
{
	/**
	 * @var array
	 */
	private $cats = [];

	/**
	 * OrphanedCatsShelter constructor.
	 */
	public function __construct()
	{
		print "The shelter created.";
	}

	/**
	 * @return array
	 */
	public function getCats(): array
	{
		return $this->cats;
	}

	/**
	 * @param array $cats
	 */
	public function setCats(array $cats)
	{
		$this->cats = $cats;
	}

	/**
	 * @return array Cats divided by their colors.
	 */
	public function countCatsSelectively(): array
	{
		$selectedCats = [];
		foreach ($this->cats as $cat) {
			$props = $cat->getProperties();
			if (empty($selectedCats[$props->getColor()])) {
				$selectedCats[$props->getColor()] = 1;
			} else {
				$selectedCats[$props->getColor()]++;
			}
		}

		return $selectedCats;
	}

	/**
	 * Generates (otherwise adds in the shelter) new bunch of cats from streets.
	 *
	 * @param int $count Number of cats to be generated.
	 *
	 * @throws \Exception
	 */
	public function fillWithNewFlyweightCats(int $count)
	{
		$factory = new CatFactory();
		array_push($this->cats, $factory->makeFlyweightCats($count));
	}

	public function fillWithNewBasicCats(int $count)
	{
		$factory = new CatFactory();
		array_push($this->cats, $factory->makeBasicCats($count));
	}

	/**
	 * The function deletes random number of cats from the shelter, but not more than the number of cats inside.
	 *
	 * @throws \Exception
	 */
	public function releaseRandomCats()
	{
		$releaseNumber = random_int(0, $this->countCats());
		$startFromCat = random_int(0, $this->countCats() - $releaseNumber);
		array_splice($this->cats, $startFromCat, $releaseNumber);
	}

	/**
	 * @return int
	 */
	public function countCats(): int
	{
		return count($this->cats);
	}
}
