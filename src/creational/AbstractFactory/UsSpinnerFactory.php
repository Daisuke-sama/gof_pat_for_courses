<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 4:28 PM
 */

namespace GOF\Creational\AbstractFactory;


class UsSpinnerFactory extends AbstractSpinnerFactory
{
    private $context = 'Us';

    function printContext()
    {
        print 'context: ' . $this->context . ' // ';
    }

    function makeCircleSpinner()
    {
        return new UsCircleSpinner();
    }

    function makeSquareSpinner()
    {
        return new UsSquareSpinner();
    }
}