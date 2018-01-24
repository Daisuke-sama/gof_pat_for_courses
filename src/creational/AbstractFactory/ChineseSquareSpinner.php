<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 10:59 PM
 */

namespace GOF\Creational\AbstractFactory;


class ChineseSquareSpinner extends AbstractSquareSpinner
{
    private $model;
    private $inventor;

    function __construct()
    {
        $this->model = 'ChineseNew';
        $this->inventor = 'Suu Pei';
    }

    function getModel()
    {
        return $this->model;
    }

    function getInventor()
    {
        return $this->inventor;
    }
}