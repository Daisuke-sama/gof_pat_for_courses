<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 4:31 PM
 */

namespace GOF\Creational\AbstractFactory;


abstract class AbstractSpinner
{

    abstract function getModel();

    abstract function getInventor();

}