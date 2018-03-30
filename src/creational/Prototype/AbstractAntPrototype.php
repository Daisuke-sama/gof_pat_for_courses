<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 9:12 PM
 */

declare(strict_types=1);

namespace GOF\Creational\Prototype;


/**
 * Class AbstractAntPrototype
 *
 * @package GOF\Creational\Prototype
 */
abstract class AbstractAntPrototype
{
    /**
     * @var string
     */
    protected $_type;

    /**
     * @var string
     */
    protected $_home;

    /**
     * @var int
     */
    protected $_number;

	/**
	 * AbstractAntPrototype constructor.
	 *
	 * @param string $type
	 * @param string $home
	 */
    function __construct(string $type, string $home)
    {
        $this->_type = $type;
        $this->_home = $home;
        $this->_number = 1;
    }

	/**
	 * @return string
	 */
    function __toString() : string
    {
        return 'Ant type: ' . $this->_type
               . ', in its home: ' . $this->_home;
    }

	/**
	 * @return string
	 */
    function getAnt() : string
    {
        return $this->__toString();
    }

	/**
	 * @return void
	 */
    abstract function __clone();
}