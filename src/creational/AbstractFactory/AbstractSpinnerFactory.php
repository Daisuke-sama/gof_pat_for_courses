<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 24-Jan-18
 * Time: 1:09 AM
 */

namespace GOF\Creational\AbstractFactory;


abstract class AbstractSpinnerFactory
{
    abstract function makeCircleSpinner();

    abstract function makeSquareSpinner();
}