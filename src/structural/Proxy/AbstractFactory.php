<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 19-Jun-18
 * Time: 12:30 AM
 */

namespace GOF\Structural\Proxy;

/**
 * Class AbstractFactory
 *
 * @package GOF\Structural\Proxy
 */
abstract class AbstractFactory
{
    abstract public function generateObjects(int $count): array;
}