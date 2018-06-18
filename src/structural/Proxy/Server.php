<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 19-Jun-18
 * Time: 12:18 AM
 */

namespace GOF\Structural\Proxy;

use function var_export;


/**
 * Class Server represents real high-sensitive processor.
 *
 * @package GOF\Structural\Proxy
 */
class Server extends AbstractServer
{
    /**
     * Processor of a request.
     *
     * @param array $objects The array of objects to process with the proxy.
     *
     * @return mixed
     */
    public function processRequest(array $objects): string
    {
        return var_export($objects, true);
    }
}