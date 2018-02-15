<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 15-Feb-18
 * Time: 2:16 PM
 */

namespace GOF\Structural\Adapter;


class BigBuddyAdapter implements TargetAPIInterface
{
    /**
     * @var BomberMethodsAdaptee
     */
    private $sourceBomberMethods;

    public function __construct()
    {
        $this->sourceBomberMethods = new BomberMethodsAdaptee();
    }

    public function createBigBuddyBadaBoom()
    {
        print "Adapted -> ";
        $this->sourceBomberMethods->createBadaBoom();
    }
}