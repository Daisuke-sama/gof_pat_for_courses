<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 19-Jun-18
 * Time: 12:25 AM
 */

include_once dirname(__DIR__).'/../../vendor/autoload.php';

/**
 * @param \GOF\Structural\Proxy\AbstractFactory $theFactory
 * @param int                                   $howMuch
 *
 * @return array
 */
function launchFactory(\GOF\Structural\Proxy\AbstractFactory $theFactory, int $howMuch)
{
    return $theFactory->generateObjects($howMuch);
}

$server = new \GOF\Structural\Proxy\Server();
$proxy = new GOF\Structural\Proxy\FirewallServer($server, 15);
$webFactory = new \GOF\Structural\Proxy\WebsitesFactory();

for ($i = 0; $i < 30; $i++) {
    $websites = launchFactory($webFactory, 10);
    print $proxy->processRequest($websites) . PHP_EOL;
}