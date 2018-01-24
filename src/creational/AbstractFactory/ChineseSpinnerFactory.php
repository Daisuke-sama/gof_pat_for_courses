<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 24-Jan-18
 * Time: 1:14 AM
 */

namespace GOF\Creational\AbstractFactory;


class ChineseSpinnerFactory extends AbstractSpinnerFactory
{
    private $context = 'Chinese';

    function makeCircleSpinner()
    {
        return new ChineseCircleSpinner();
    }

    function makeSquareSpinner()
    {
        return new ChineseSquareSpinner();
    }
}