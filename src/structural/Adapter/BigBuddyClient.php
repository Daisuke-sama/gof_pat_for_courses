<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 15-Feb-18
 * Time: 2:18 PM
 */

namespace GOF\Structural\Adapter;


class BigBuddyClient
{
    /**
     * @var TargetAPIInterface
     */
    private $bomber;

    public function __construct(TargetAPIInterface $adapter)
    {
        $this->bomber = $adapter;
    }

    public function createBadaBoom()
    {
        $this->bomber->createBigBuddyBadaBoom();
    }
}