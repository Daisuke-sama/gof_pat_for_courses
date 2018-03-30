<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 9:22 PM
 */
declare(strict_types=1);

namespace GOF\Creational\Prototype;


/**
 * Class BigAnt
 *
 * @package GOF\Creational\Prototype
 */
class BigAnt extends AbstractAntPrototype
{
    /**
     * @var int
     */
    protected static $count = 1;

	/**
	 * BigAnt constructor.
	 *
	 * @param string $home
	 */
    function __construct(string $home)
    {
        parent::__construct('Big', $home);
    }

	/**
	 * @return void
	 */
    function __clone()
    {
        $this->_number = self::$count + 1;
        self::$count++;
    }

	/**
	 * @return string
	 */
    function __toString(): string
    {
        return parent::__toString() . ', its number: ' . $this->_number;
    }
}