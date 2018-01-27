<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 8:29 PM
 */

namespace GOF\Creational\Builder;


abstract class AbstractCatBuilder
{
    abstract function buildPaws() : void;
    abstract function buildBody() : void;
    abstract function buildHead() : void;
    abstract function getCat() : Cat;
}