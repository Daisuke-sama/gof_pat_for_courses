<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Jun-18
 * Time: 11:59 PM
 */

namespace GOF\Structural\Proxy;


/**
 * Class AbstractProxy is a basement for concrete proxies.
 *
 * @package GOF\Structural\Proxy
 */
abstract class AbstractServer
{
    /**
     * Processor of a request.
     *
     * @param array $objects The array of objects to process with the proxy.
     *
     * @return mixed
     */
    abstract public function processRequest(array $objects);
}