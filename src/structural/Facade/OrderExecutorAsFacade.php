<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 22-Apr-18
 * Time: 4:37 PM
 */

namespace GOF\Structural\Facade;

use function in_array;


/**
 * Class OrderExecutorAsFacade represents a facade class that provide simple interface for a lumber procurement.
 *
 * It can deliver only OAK tree lumber and LINDEN tree lumber.
 *
 * @package GOF\Structural\Facade
 */
class OrderExecutorAsFacade
{
	/**
	 * @var string
	 */
	private $lumberType;

	/**
	 * @var array
	 */
	private $acceptedLumberTypes
		= [
			'OAK',
			'LINDEN',
		];

	/**
	 * OrderExecutorAsFacade constructor.
	 *
	 * @param string $orderedLumberType
	 */
	public function __construct(string $orderedLumberType)
	{
		$this->lumberType = $orderedLumberType;
	}

	/**
	 * (This is a simplifier function in facade pattern example.)
	 * Delivers an order.
	 */
	public function deliver()
	{
		if (in_array($this->lumberType, $this->acceptedLumberTypes)) {
			$source = $this->getSource();
			$beams = $this->getBeam($source);
			$lumbers = $this->getLumbers($beams);
		} else {
			$lumbers = '';
		}

		return $lumbers;
	}

	/**
	 * @return string
	 */
	protected function getSource()
	{
		$woodCutter = new WoodCutter();
		return $woodCutter->cut($this->lumberType);
	}

	/**
	 * @param string $source
	 *
	 * @return string
	 */
	protected function getBeam(string $source)
	{
		$beams = '';

		if (!empty($source)) {
			$bench = new PowerSawBench();
			$beams = $bench->makeCleanBeams($source);
		}

		return $beams;
	}

	/**
	 * @param string $beams
	 *
	 * @return string
	 */
	protected function getLumbers(string $beams)
	{
		$lumbers = '';

		if (!empty($beams)) {
			$factory = new LumbersFactory();
			$lumbers = $factory->makeLumbers($beams);
		}

		return $lumbers;
	}

	/**
	 * @param string $neededType
	 */
	public function takeOrder(string $neededType)
	{
		$this->lumberType = $neededType;
	}
}