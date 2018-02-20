<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Feb-18
 * Time: 11:16 PM
 */

namespace GOF\Structural\Composition;


use function class_implements;
use function in_array;
use function is_subclass_of;
use function parse_ini_file;
use SplQueue;

/**
 * Class Sir can add only IUnits into its subordinates list.
 *
 * @package GOF\Structural\Composition
 */
class Sir extends SplQueue implements IUnit
{
	/**
	 * @var
	 */
	private $name;


	public function __construct(string $nameOfSir)
	{
		$this->name = $nameOfSir;
	}

	public function sayName(): void
	{
		print 'I am Sir ' . $this->name . '. ';
	}

	public function enqueue($newval)
	{
		if (is_subclass_of($newval, IUnit::class)) {
			parent::enqueue($newval);
		} else {
			echo 'We can add only real IUnit! ';
		}
	}

	public function push($value)
	{
		$this->enqueue($value);
	}

	public function add($index, $newval)
	{
		$this->enqueue($newval);
	}
}