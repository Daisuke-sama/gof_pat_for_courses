<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 9:56 PM
 */
declare(strict_types=1);

namespace GOF\Creational\Singleton;


use Exception;
use function is_null;

class MotherSingleton
{
    private static $Mother = null;
    private $_name = 'My Only Mother';
    private $_age = 52;
    private $_town = 'Mothertown';

    private function __construct()
    {
    }

    function __clone()
    {
        throw new Exception('Only one mother you can have.');
    }

    static function callMother()
    {
        if (is_null(self::$Mother)) {
            self::$Mother = new MotherSingleton();
        }

        return self::$Mother;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->_age;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->_town;
    }

    /**
     * @param string $town
     */
    public function setTown(string $town): void
    {
        $this->_town = $town;
    }
}