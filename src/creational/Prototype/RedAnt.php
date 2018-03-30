<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 9:26 PM
 */
declare(strict_types=1);

namespace GOF\Creational\Prototype;


/**
 * Class RedAnt
 *
 * @package GOF\Creational\Prototype
 */
class RedAnt extends AbstractAntPrototype
{
    /**
     * @var int
     */
    protected static $count = 1;

	/**
	 * RedAnt constructor.
	 *
	 * @param string $home
	 */
    function __construct(string $home)
    {
        parent::__construct('Red', $home);
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