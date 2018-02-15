<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 15-Feb-18
 * Time: 2:24 PM
 */

namespace GOF\Structural\Adapter;


class BomberMethodsAdaptee
{
    public function createBadaBoom()
    {
        print 'BADA BOOM !!!';
    }
}