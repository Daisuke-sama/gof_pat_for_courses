<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 19-Jun-18
 * Time: 12:31 AM
 */

namespace GOF\Structural\Proxy;


use SplFixedArray;

/**
 * Class WebsitesFactory
 *
 * @package GOF\Structural\Proxy
 */
class WebsitesFactory extends AbstractFactory
{
    /**
     * The function returns an array of websites.
     *
     * @param int $count The count of websites to be created.
     *
     * @return array
     */
    public function generateObjects(int $count = 1): array
    {
        $websites = new SplFixedArray;
        $websites->setSize($count);

        for ($i = 0; $i < $count; $i++) {
            $websites->offsetSet($i, new Website());
        }

        return $websites->toArray();
    }
}