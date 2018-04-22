<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 22-Apr-18
 * Time: 4:48 PM
 */

namespace GOF\Structural\Facade;
use function sprintf;


/**
 * Class Customer is a person who want to order a lumber using simple interface.
 *
 * @package GOF\Structural\Facade
 */
class Customer
{
	/**
	 * @var string
	 */
	private $treeType;

	/**
	 * @var bool
	 */
	private $orderReceived;


	/**
	 * Customer constructor.
	 */
	public function __construct()
	{
		$this->treeType = '';
		$this->orderReceived = false;
	}

	/**
	 * Sets desired tree of lumber.
	 *
	 * @param string $treeType
	 */
	public function setNeeded(string $treeType)
	{
		$this->treeType = $treeType;
	}

	/**
	 * Provides desired type of tree of lumber.
	 *
	 * @return string
	 */
	public function getNeeded(): string
	{
		return $this->treeType;
	}

	/**
	 * Tells customer's mood.
	 *
	 * @return string
	 */
	public function __invoke()
	{
		$state = 'The customer in a %s mood, because he has %s received his order. Executor could %s provide lumbers from the %s tree.';
		if (true === $this->orderReceived) {
			$state = sprintf($state, 'good', '', '', $this->treeType);
		} else {
			$state = sprintf($state, 'bad', 'not', 'not', $this->treeType);
		}

		return $state;
	}

	/**
	 * Delivers the order results to the customer.
	 *
	 * @param string $deliverable
	 */
	public function receiveOrder(string $deliverable)
	{
		$this->orderReceived = (bool) $deliverable;
	}
}