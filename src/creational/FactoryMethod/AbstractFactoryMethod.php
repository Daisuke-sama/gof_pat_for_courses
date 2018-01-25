<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 5:47 PM
 */

namespace GOF\Creational\FactoryMethod;

abstract class AbstractFactoryMethod
{
    abstract function writeAnArticle(string $type) : AbstractArticle;
}