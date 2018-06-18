<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Jun-18
 * Time: 11:58 PM
 */

namespace GOF\Structural\Proxy;


/**
 * Class FirewallProxy realises a security border.
 *
 * @package GOF\Structural\Proxy
 */
class FirewallServer extends AbstractServer
{
    /**
     * @var Server The server that is proxied.
     */
    private $realServer;

    /**
     * @var int
     */
    private $restriction;

    /**
     * FirewallServer constructor.
     *
     * @param Server $server
     * @param int    $restriction The threshold of the Rank acceptability.
     */
    public function __construct(Server $server, int $restriction)
    {
        $this->realServer = $server;
        $this->restriction = $restriction;
    }

    /**
     * Processor of a request, which does only when all passed objects are
     * acceptable.
     *
     * @param array $websites The bunch or websites to test. Every object has to
     *                        be acceptable for avoid rejection.
     *
     * @return string The answer of a conclusion.
     */
    public function processRequest(array $websites): string
    {
        foreach ($websites as $website) {
            if ($this->restriction >= $website->getRank()) {
                return $this->reject();
            }
        }

        return $this->realServer->processRequest($websites);
    }

    /**
     * Action of rejection.
     *
     * @return string Message of rejection.
     */
    protected function reject()
    {
        return 'You are not eligible.';
    }
}