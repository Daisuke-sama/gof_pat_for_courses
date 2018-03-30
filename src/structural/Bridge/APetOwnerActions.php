<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 8:06 PM
 */

namespace GOF\Structural\Bridge;


abstract class APetOwnerActions
{
    abstract function walkAPet(string $name) : void;

    abstract function checkItsHealth() : string;
}